<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Laravel\Facades\Image;
use Illuminate\Support\Facades\DB;

class TeamContentController extends Controller
{
    public function index()
    {
        $contents = Team::orderBy('order', 'asc')->get();
        return view('admin.team.index', compact('contents'));
    }

    public function create()
    {
        $nextOrder = Team::max('order') + 1 ?? 0;
        return view('admin.team.create', compact('nextOrder'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'position' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'instagram_url' => 'nullable|url',
            'linkedin_url' => 'nullable|url',
            'order' => 'required|integer|unique:teams,order',
        ]);

        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $this->compressAndSaveImage($request->file('image'), 'teams');
        }

        Team::create([
            'name' => $request->name,
            'position' => $request->position,
            'image' => $imagePath,
            'instagram_url' => $request->instagram_url,
            'linkedin_url' => $request->linkedin_url,
            'order' => $request->order,
            'is_active' => $request->has('is_active') ? 1 : 0,
        ]);

        return redirect()->route('admin.team.index')->with('success', 'Team member added successfully.');
    }

    public function edit(Team $team)
    {
        return view('admin.team.edit', compact('team'));
    }

    public function update(Request $request, Team $team)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'position' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'instagram_url' => 'nullable|url',
            'linkedin_url' => 'nullable|url',
            'order' => 'required|integer|unique:teams,order,' . $team->id,
        ]);

        if ($request->hasFile('image')) {
            if ($team->image) {
                Storage::disk('public')->delete($team->image);
            }
            $imagePath = $this->compressAndSaveImage($request->file('image'), 'teams');
            $team->image = $imagePath;
        }

        $team->name = $request->name;
        $team->position = $request->position;
        $team->instagram_url = $request->instagram_url;
        $team->linkedin_url = $request->linkedin_url;
        $team->order = $request->order;
        $team->is_active = $request->has('is_active') ? 1 : 0;
        $team->save();

        return redirect()->route('admin.team.index')->with('success', 'Team member updated successfully.');
    }

    public function destroy(Team $team)
    {
        if ($team->image) {
            Storage::disk('public')->delete($team->image);
        }
        
        $team->delete();
        
        $this->reorderTeams();
        
        return redirect()->route('admin.team.index')->with('success', 'Team member deleted successfully.');
    }

    public function updateOrder(Request $request)
    {
        $request->validate([
            'orders' => 'required|array',
            'orders.*' => 'required|integer|exists:teams,id'
        ]);

        DB::transaction(function () use ($request) {
            foreach ($request->orders as $index => $teamId) {
                Team::where('id', $teamId)->update([
                    'order' => -1000 - $index
                ]);
            }

            foreach ($request->orders as $index => $teamId) {
                Team::where('id', $teamId)->update([
                    'order' => $index
                ]);
            }
        });

        return response()->json([
            'success' => true,
            'message' => 'Order updated successfully'
        ]);
    }


    private function reorderTeams()
    {
        $teams = Team::orderBy('order', 'asc')->get();
        foreach ($teams as $index => $team) {
            $team->update(['order' => $index]);
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