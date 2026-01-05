<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\GraphicContent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Laravel\Facades\Image;
use Illuminate\Support\Facades\Log;

class GraphicContentController extends Controller
{
    public function index()
    {
        $contents = GraphicContent::orderBy('date', 'desc')->get();
        return view('admin.graphic.index', compact('contents'));
    }

    public function create()
    {
        return view('admin.graphic.create');
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
                $imagePath = $this->compressAndSaveImage($request->file('image'), 'graphics');
            }

            GraphicContent::create([
                'title' => $request->title,
                'client' => $request->client,
                'date' => $request->date,
                'description' => $request->description,
                'image' => $imagePath,
            ]);

            return redirect()->route('admin.graphic.index')->with('success', 'Graphic content created successfully.');
        } catch (\Exception $e) {
            Log::error('graphic image upload failed: ' . $e->getMessage());
            return back()->withInput()->withErrors(['image' => 'Failed to upload image: ' . $e->getMessage()]);
        }
    }

    public function edit(GraphicContent $graphicContent)
    {
        return view('admin.graphic.edit', compact('graphicContent'));
    }

    public function update(Request $request, GraphicContent $graphicContent)
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
                if ($graphicContent->image) {
                    Storage::disk('public')->delete($graphicContent->image);
                }
                $imagePath = $this->compressAndSaveImage($request->file('image'), 'graphics');
                $graphicContent->image = $imagePath;
            }

            $graphicContent->title = $request->title;
            $graphicContent->client = $request->client;
            $graphicContent->date = $request->date;
            $graphicContent->description = $request->description;
            $graphicContent->save();
            
            return redirect()->route('admin.graphic.index')->with('success', 'Graphic content updated successfully.');
        } catch (\Exception $e) {
            Log::error('graphic image update failed: ' . $e->getMessage());
            return back()->withInput()->withErrors(['image' => 'Failed to update image: ' . $e->getMessage()]);
        }
    }

    public function destroy(GraphicContent $graphicContent)
    {
        try {
            if ($graphicContent->image) {
                Storage::disk('public')->delete($graphicContent->image);
            }
            
            $graphicContent->delete();
            return redirect()->route('admin.graphic.index')->with('success', 'Graphic content deleted successfully.');
        } catch (\Exception $e) {
            Log::error('Graphic delete failed: ' . $e->getMessage());
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
                throw new \Exception('Failed to save Graphic image to storage');
            }

            return $path;
        } catch (\Exception $e) {
            Log::error('Image compression failed: ' . $e->getMessage());
            throw $e;
        }
    }
}
