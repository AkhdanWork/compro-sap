<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\HomeContent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Laravel\Facades\Image;
use Illuminate\Support\Facades\Log;

class HomeContentController extends Controller
{
    public function index()
    {
        $contents = HomeContent::orderBy('date', 'desc')->get();
        return view('admin.home.index', compact('contents'));
    }

    public function create()
    {
        return view('admin.home.create');
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
                $imagePath = $this->compressAndSaveImage($request->file('image'), 'homes');
            }

            HomeContent::create([
                'title' => $request->title,
                'client' => $request->client,
                'date' => $request->date,
                'description' => $request->description,
                'image' => $imagePath,
            ]);

            return redirect()->route('admin.home.index')->with('success', 'Event Organizer content created successfully.');
        } catch (\Exception $e) {
            Log::error('home image upload failed: ' . $e->getMessage());
            return back()->withInput()->withErrors(['image' => 'Failed to upload image: ' . $e->getMessage()]);
        }
    }

    public function edit(HomeContent $homeContent)
    {
        return view('admin.home.edit', compact('homeContent'));
    }

    public function update(Request $request, HomeContent $homeContent)
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
                if ($homeContent->image) {
                    Storage::disk('public')->delete($homeContent->image);
                }
                $imagePath = $this->compressAndSaveImage($request->file('image'), 'homes');
                $homeContent->image = $imagePath;
            }

            $homeContent->title = $request->title;
            $homeContent->client = $request->client;
            $homeContent->date = $request->date;
            $homeContent->description = $request->description;
            $homeContent->save();
            
            return redirect()->route('admin.home.index')->with('success', 'Event Organizer content updated successfully.');
        } catch (\Exception $e) {
            Log::error('home image update failed: ' . $e->getMessage());
            return back()->withInput()->withErrors(['image' => 'Failed to update image: ' . $e->getMessage()]);
        }
    }

    public function destroy(HomeContent $homeContent)
    {
        try {
            if ($homeContent->image) {
                Storage::disk('public')->delete($homeContent->image);
            }
            
            $homeContent->delete();
            return redirect()->route('admin.home.index')->with('success', 'Event Organizer content deleted successfully.');
        } catch (\Exception $e) {
            Log::error('Event Organizer delete failed: ' . $e->getMessage());
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
                throw new \Exception('Failed to save Event Organizer image to storage');
            }

            return $path;
        } catch (\Exception $e) {
            Log::error('Image compression failed: ' . $e->getMessage());
            throw $e;
        }
    }
}
