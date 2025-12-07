<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\HomeContent;
use Illuminate\Http\Request;

class HomeContentController extends Controller
{
    public function index()
    {
        $contents = HomeContent::all();
        return view('admin.home.index', compact('contents'));
    }

    public function create()
    {
        return view('admin.home.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'client' => 'required', // changed from 'content' to 'client'
            'date' => 'required|date', // changed from 'date' to 'date'
            'image' => 'nullable|image',
        ]);

        $imagePath = $request->file('image') ? $request->file('image')->store('images', 'public') : null;

        HomeContent::create([
            'title' => $request->title,
            'client' => $request->client, // changed from 'content' to 'client'
            'date' => $request->date, // changed from 'date' to 'date'
            'image' => $imagePath,
        ]);

        return redirect()->route('admin.home.index')->with('success', 'Content created successfully.');
    }

    public function edit(HomeContent $homeContent)
    {
        return view('admin.home.edit', compact('homeContent'));
    }

    public function update(Request $request, HomeContent $homeContent)
    {
        $request->validate([
            'title' => 'required',
            'client' => 'required', // changed from 'content' to 'client'
            'date' => 'required|date', // changed from 'date' to 'date'
            'image' => 'nullable|image',
        ]);

        if ($request->file('image')) {
            $imagePath = $request->file('image')->store('images', 'public');
            $homeContent->image = $imagePath;
        }

        $homeContent->title = $request->title;
        $homeContent->client = $request->client; // changed from 'content' to 'client'
        $homeContent->date = $request->date; // changed from 'date' to 'date'
        $homeContent->save();

        return redirect()->route('admin.home.index')->with('success', 'Content updated successfully.');
    }

    public function destroy(HomeContent $homeContent)
    {
        $homeContent->delete();
        return redirect()->route('admin.home.index')->with('success', 'Content deleted successfully.');
    }
}
