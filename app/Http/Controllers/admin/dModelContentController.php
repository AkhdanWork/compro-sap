<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\dModelContent;
use Illuminate\Http\Request;

class dModelContentController extends Controller
{
    public function index()
    {
        $contents = dModelContent::all();
        return view('admin.dmodel.index', compact('contents'));
    }

    public function create()
    {
        return view('admin.dmodel.create');
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

        dModelContent::create([
            'title' => $request->title,
            'client' => $request->client, // changed from 'content' to 'client'
            'date' => $request->date, // changed from 'date' to 'date'
            'image' => $imagePath,
        ]);

        return redirect()->route('admin.dmodel.index')->with('success', 'Content created successfully.');
    }

    public function edit(dModelContent $dmodelContent)
    {
        return view('admin.dmodel.edit', compact('dmodelContent'));
    }

    public function update(Request $request, dModelContent $dmodelContent)
    {
        $request->validate([
            'title' => 'required',
            'client' => 'required', // changed from 'content' to 'client'
            'date' => 'required|date', // changed from 'date' to 'date'
            'image' => 'nullable|image',
        ]);

        if ($request->file('image')) {
            $imagePath = $request->file('image')->store('images', 'public');
            $dmodelContent->image = $imagePath;
        }

        $dmodelContent->title = $request->title;
        $dmodelContent->client = $request->client; // changed from 'content' to 'client'
        $dmodelContent->date = $request->date; // changed from 'date' to 'date'
        $dmodelContent->save();

        return redirect()->route('admin.dmodel.index')->with('success', 'Content updated successfully.');
    }

    public function destroy(dModelContent $dmodelContent)
    {
        $dmodelContent->delete();
        return redirect()->route('admin.dmodel.index')->with('success', 'Content deleted successfully.');
    }
}
