<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Laravel\Facades\Image;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class TestimonialContentController extends Controller
{
    public function index()
    {
        $contents = Testimonial::orderBy('order', 'asc')->get();
        return view('admin.testimonial.index', compact('contents'));
    }

    public function create()
    {
        return view('admin.testimonial.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'quote' => 'required|string',
            'name' => 'required|string|max:255',
            'position' => 'required|string|max:255',
            'company' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'order' => 'nullable|integer',
        ]);

        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $this->compressAndSaveImage($request->file('image'), 'testimonials');
        }

        Testimonial::create([
            'quote' => $request->quote,
            'name' => $request->name,
            'position' => $request->position,
            'company' => $request->company,
            'image' => $imagePath,
            'order' => $request->order ?? 0,
            'is_active' => $request->has('is_active') ? 1 : 0,
        ]);

        return redirect()->route('admin.testimonial.index')->with('success', 'Testimonial created successfully.');
    }

    public function edit(Testimonial $testimonial)
    {
        return view('admin.testimonial.edit', compact('testimonial'));
    }

    public function update(Request $request, Testimonial $testimonial)
    {
        $request->validate([
            'quote' => 'required|string',
            'name' => 'required|string|max:255',
            'position' => 'required|string|max:255',
            'company' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'order' => 'nullable|integer',
        ]);

        if ($request->hasFile('image')) {
            if ($testimonial->image) {
                Storage::disk('public')->delete($testimonial->image);
            }
            $imagePath = $this->compressAndSaveImage($request->file('image'), 'testimonials');
            $testimonial->image = $imagePath;
        }

        $testimonial->quote = $request->quote;
        $testimonial->name = $request->name;
        $testimonial->position = $request->position;
        $testimonial->company = $request->company;
        $testimonial->order = $request->order ?? 0;
        $testimonial->is_active = $request->has('is_active') ? 1 : 0;
        $testimonial->save();

        return redirect()->route('admin.testimonial.index')->with('success', 'Testimonial updated successfully.');
    }

    public function destroy(Testimonial $testimonial)
    {
        if ($testimonial->image) {
            Storage::disk('public')->delete($testimonial->image);
        }
        
        $testimonial->delete();
        $this->reorderTestimonials();
        return redirect()->route('admin.testimonial.index')->with('success', 'Testimonial deleted successfully.');
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

    public function updateOrder(Request $request)
    {
        try {
            $request->validate([
                'orders' => 'required|array',
                'orders.*' => 'required|integer|exists:testimonials,id',
            ]);

            DB::transaction(function () use ($request) {
                foreach ($request->orders as $index => $id) {
                    Testimonial::where('id', $id)->update([
                        'order' => -1000 - $index
                    ]);
                }

                foreach ($request->orders as $index => $id) {
                    Testimonial::where('id', $id)->update([
                        'order' => $index
                    ]);
                }
            });

            return response()->json([
                'success' => true
            ], 200);

        } catch (\Throwable $e) {
            Log::error('Update testimonial order failed', [
                'error' => $e->getMessage()
            ]);

            return response()->json([
                'success' => false,
                'message' => $e->getMessage()
            ], 500);
        }
    }

    private function reorderTestimonials()
    {
        Testimonial::orderBy('order')->get()
            ->each(fn ($item, $index) =>
                $item->update(['order' => $index])
            );
    }


}