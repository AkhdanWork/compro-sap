<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PartnerContent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Laravel\Facades\Image;
use Illuminate\Support\Facades\DB;

class PartnerContentController extends Controller
{
    public function index()
    {
        $contents = PartnerContent::orderBy('order', 'asc')->get();
        return view('admin.partner.index', compact('contents'));
    }

    public function create()
    {
        $nextOrder = PartnerContent::max('order') + 1 ?? 0;
        return view('admin.partner.create', compact('nextOrder'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'order' => 'required|integer|unique:partner_contents,order',
        ]);

        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $this->compressAndSaveImage($request->file('image'), 'partners');
        }

        PartnerContent::create([
            'title' => $request->title,
            'image' => $imagePath,
            'order' => $request->order,
        ]);

        return redirect()->route('admin.partner.index')->with('success', 'Partner created successfully.');
    }

    public function edit(PartnerContent $partnerContent)
    {
        return view('admin.partner.edit', compact('partnerContent'));
    }

    public function update(Request $request, PartnerContent $partnerContent)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'order' => 'required|integer|unique:partner_contents,order,' . $partnerContent->id,
        ]);

        if ($request->hasFile('image')) {
            if ($partnerContent->image) {
                Storage::disk('public')->delete($partnerContent->image);
            }
            $imagePath = $this->compressAndSaveImage($request->file('image'), 'partners');
            $partnerContent->image = $imagePath;
        }

        $partnerContent->title = $request->title;
        $partnerContent->order = $request->order;
        $partnerContent->save();

        return redirect()->route('admin.partner.index')->with('success', 'Partner updated successfully.');
    }

    public function destroy(PartnerContent $partnerContent)
    {
        if ($partnerContent->image) {
            Storage::disk('public')->delete($partnerContent->image);
        }
        
        $partnerContent->delete();
        $this->reorderPartners();
        
        return redirect()->route('admin.partner.index')->with('success', 'Partner deleted successfully.');
    }

    public function updateOrder(Request $request)
    {
        $request->validate([
            'orders' => 'required|array',
            'orders.*' => 'required|integer|exists:partner_contents,id'
        ]);

        try {
            DB::transaction(function () use ($request) {
            foreach ($request->orders as $index => $partnerId) {
                PartnerContent::where('id', $partnerId)->update([
                    'order' => -1000 - $index
                ]);
            }

            foreach ($request->orders as $index => $partnerId) {
                PartnerContent::where('id', $partnerId)->update([
                    'order' => $index
                ]);
            }
        });

            return response()->json([
                'success' => true, 
                'message' => 'Order updated successfully'
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false, 
                'message' => 'Failed to update order: ' . $e->getMessage()
            ], 500);
        }
    }

    private function reorderPartners()
    {
        $partners = PartnerContent::orderBy('order', 'asc')->get();
        foreach ($partners as $index => $partner) {
            $partner->update(['order' => $index]);
        }
    }

    private function compressAndSaveImage($image, $folder = 'images')
    {
        $filename = time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();
        $path = $folder . '/' . $filename;

        $img = Image::read($image->getRealPath());

        if ($img->width() > 800) {
            $img->scale(width: 800);
        }

        $encoded = $img->toJpeg(quality: 80);
        Storage::disk('public')->put($path, $encoded);

        return $path;
    }
}