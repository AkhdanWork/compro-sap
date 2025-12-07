<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\WeddingContent;
use Illuminate\Http\Request;

class WeddingContentController extends Controller
{
    public function index()
    {
        $contents = WeddingContent::all();
        return view('admin.wedding.index', compact('contents'));
    }

    public function create()
    {
        return view('admin.wedding.create');
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

        WeddingContent::create([
            'title' => $request->title,
            'client' => $request->client, // changed from 'content' to 'client'
            'date' => $request->date, // changed from 'date' to 'date'
            'image' => $imagePath,
        ]);

        return redirect()->route('admin.wedding.index')->with('success', 'Content created successfully.');
    }

    public function edit(WeddingContent $weddingContent)
    {
        return view('admin.wedding.edit', compact('weddingContent'));
    }

    public function update(Request $request, WeddingContent $weddingContent)
    {
        $request->validate([
            'title' => 'required',
            'client' => 'required', // changed from 'content' to 'client'
            'date' => 'required|date', // changed from 'date' to 'date'
            'image' => 'nullable|image',
        ]);

        if ($request->file('image')) {
            $imagePath = $request->file('image')->store('images', 'public');
            $weddingContent->image = $imagePath;
        }

        $weddingContent->title = $request->title;
        $weddingContent->client = $request->client; // changed from 'content' to 'client'
        $weddingContent->date = $request->date; // changed from 'date' to 'date'
        $weddingContent->save();

        return redirect()->route('admin.wedding.index')->with('success', 'Content updated successfully.');
    }

    public function destroy(WeddingContent $weddingContent)
    {
        $weddingContent->delete();
        return redirect()->route('admin.wedding.index')->with('success', 'Content deleted successfully.');
    }
}
