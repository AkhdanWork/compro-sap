<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\GraphicContent;
use Illuminate\Http\Request;

class GraphicContentController extends Controller
{
    public function index()
    {
        $contents = GraphicContent::all();
        return view('admin.graphic.index', compact('contents'));
    }

    public function create()
    {
        return view('admin.graphic.create');
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

        GraphicContent::create([
            'title' => $request->title,
            'client' => $request->client, // changed from 'content' to 'client'
            'date' => $request->date, // changed from 'date' to 'date'
            'image' => $imagePath,
        ]);

        return redirect()->route('admin.graphic.index')->with('success', 'Content created successfully.');
    }

    public function edit(GraphicContent $graphicContent)
    {
        return view('admin.graphic.edit', compact('graphicContent'));
    }

    public function update(Request $request, GraphicContent $graphicContent)
    {
        $request->validate([
            'title' => 'required',
            'client' => 'required', // changed from 'content' to 'client'
            'date' => 'required|date', // changed from 'date' to 'date'
            'image' => 'nullable|image',
        ]);

        if ($request->file('image')) {
            $imagePath = $request->file('image')->store('images', 'public');
            $graphicContent->image = $imagePath;
        }

        $graphicContent->title = $request->title;
        $graphicContent->client = $request->client; // changed from 'content' to 'client'
        $graphicContent->date = $request->date; // changed from 'date' to 'date'
        $graphicContent->save();

        return redirect()->route('admin.graphic.index')->with('success', 'Content updated successfully.');
    }

    public function destroy(GraphicContent $graphicContent)
    {
        $graphicContent->delete();
        return redirect()->route('admin.graphic.index')->with('success', 'Content deleted successfully.');
    }
}
