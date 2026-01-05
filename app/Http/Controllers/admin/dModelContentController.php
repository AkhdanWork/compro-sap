<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\dModelContent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Laravel\Facades\Image;
use Illuminate\Support\Facades\Log;

class dModelContentController extends Controller
{
    public function index()
    {
        $contents = dModelContent::orderBy('date', 'desc')->get();
        return view('admin.dmodel.index', compact('contents'));
    }

    public function create()
    {
        return view('admin.dmodel.create');
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
                $imagePath = $this->compressAndSaveImage($request->file('image'), 'dmodels');
            }

            dModelContent::create([
                'title' => $request->title,
                'client' => $request->client,
                'date' => $request->date,
                'description' => $request->description,
                'image' => $imagePath,
            ]);

            return redirect()->route('admin.dmodel.index')->with('success', '3D Model content created successfully.');
        } catch (\Exception $e) {
            Log::error('3D Model image upload failed: ' . $e->getMessage());
            return back()->withInput()->withErrors(['image' => 'Failed to upload 3D Model image: ' . $e->getMessage()]);
        }
    }

    public function edit(dModelContent $dmodelContent)
    {
        return view('admin.dmodel.edit', compact('dmodelContent'));
    }

    public function update(Request $request, dModelContent $dmodelContent)
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
                if ($dmodelContent->image) {
                    Storage::disk('public')->delete($dmodelContent->image);
                }
                $imagePath = $this->compressAndSaveImage($request->file('image'), 'dmodels');
                $dmodelContent->image = $imagePath;
            }

            $dmodelContent->title = $request->title;
            $dmodelContent->client = $request->client;
            $dmodelContent->date = $request->date;
            $dmodelContent->description = $request->description;
            $dmodelContent->save();
            
            return redirect()->route('admin.dmodel.index')->with('success', '3D Model content updated successfully.');
        } catch (\Exception $e) {
            Log::error('dmodel image update failed: ' . $e->getMessage());
            return back()->withInput()->withErrors(['image' => 'Failed to update image: ' . $e->getMessage()]);
        }
    }

    public function destroy(dModelContent $dmodelContent)
    {
        try {
            if ($dmodelContent->image) {
                Storage::disk('public')->delete($dmodelContent->image);
            }
            
            $dmodelContent->delete();
            return redirect()->route('admin.dmodel.index')->with('success', '3D Model content deleted successfully.');
        } catch (\Exception $e) {
            Log::error('3D Model delete failed: ' . $e->getMessage());
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
                throw new \Exception('Failed to save 3D Model image to storage');
            }

            return $path;
        } catch (\Exception $e) {
            Log::error('Image compression failed: ' . $e->getMessage());
            throw $e;
        }
    }
}
