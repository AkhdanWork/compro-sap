<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\WeddingContent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Laravel\Facades\Image;
use Illuminate\Support\Facades\Log;

class WeddingContentController extends Controller
{
    public function index()
    {
        $contents = WeddingContent::orderBy('date', 'desc')->get();
        return view('admin.wedding.index', compact('contents'));
    }

    public function create()
    {
        return view('admin.wedding.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'client' => 'required|string',
            'date' => 'required|date',
            'description' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        try {
            $imagePath = null;
            if ($request->hasFile('image')) {
                $imagePath = $this->compressAndSaveImage($request->file('image'), 'weddings');
            }

            WeddingContent::create([
                'title' => $request->title,
                'client' => $request->client,
                'date' => $request->date,
                'description' => $request->description,
                'image' => $imagePath,
            ]);

            return redirect()->route('admin.wedding.index')->with('success', 'Wedding content created successfully.');
        } catch (\Exception $e) {
            Log::error('Wedding image upload failed: ' . $e->getMessage());
            return back()->withInput()->withErrors(['image' => 'Failed to upload image: ' . $e->getMessage()]);
        }
    }

    public function edit(WeddingContent $weddingContent)
    {
        return view('admin.wedding.edit', compact('weddingContent'));
    }

    public function update(Request $request, WeddingContent $weddingContent)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'client' => 'required|string',
            'date' => 'required|date',
            'description' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        try {
            if ($request->hasFile('image')) {
                if ($weddingContent->image) {
                    Storage::disk('public')->delete($weddingContent->image);
                }
                $imagePath = $this->compressAndSaveImage($request->file('image'), 'weddings');
                $weddingContent->image = $imagePath;
            }

            $weddingContent->title = $request->title;
            $weddingContent->client = $request->client;
            $weddingContent->date = $request->date;
            $weddingContent->description = $request->description;
            $weddingContent->save();

            return redirect()->route('admin.wedding.index')->with('success', 'Wedding content updated successfully.');
        } catch (\Exception $e) {
            Log::error('Wedding image update failed: ' . $e->getMessage());
            return back()->withInput()->withErrors(['image' => 'Failed to update image: ' . $e->getMessage()]);
        }
    }

    public function destroy(WeddingContent $weddingContent)
    {
        try {
            if ($weddingContent->image) {
                Storage::disk('public')->delete($weddingContent->image);
            }
            
            $weddingContent->delete();
            return redirect()->route('admin.wedding.index')->with('success', 'Wedding content deleted successfully.');
        } catch (\Exception $e) {
            Log::error('Wedding delete failed: ' . $e->getMessage());
            return back()->withErrors(['error' => 'Failed to delete: ' . $e->getMessage()]);
        }
    }

    private function compressAndSaveImage($image, $folder = 'images')
    {
        if (!Storage::disk('public')->exists($folder)) {
            Storage::disk('public')->makeDirectory($folder);
        }

        $filename = time() . '_' . uniqid() . '.jpg';
        $path = $folder . '/' . $filename;

        try {
            $img = Image::read($image->getRealPath());

            if ($img->width() > 1200) {
                $img->scale(width: 1200);
            }

            $encoded = $img->toJpeg(quality: 80);
            
            $saved = Storage::disk('public')->put($path, $encoded);
            
            if (!$saved) {
                throw new \Exception('Failed to save image to storage');
            }

            return $path;
        } catch (\Exception $e) {
            Log::error('Image compression failed: ' . $e->getMessage());
            throw $e;
        }
    }
}