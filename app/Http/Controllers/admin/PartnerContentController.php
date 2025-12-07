<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PartnerContent;
use Illuminate\Http\Request;

class PartnerContentController extends Controller
{
    public function index()
    {
        $contents = PartnerContent::all();
        return view('admin.partner.index', compact('contents'));
    }

    public function create()
    {
        return view('admin.partner.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'image' => 'nullable|image',
        ]);

        $imagePath = $request->file('image') ? $request->file('image')->store('images', 'public') : null;

        PartnerContent::create([
            'title' => $request->title,
            'image' => $imagePath,
        ]);

        return redirect()->route('admin.partner.index')->with('success', 'Content created successfully.');
    }

    public function edit(PartnerContent $partnerContent)
    {
        return view('admin.partner.edit', compact('partnerContent'));
    }

    public function update(Request $request, PartnerContent $partnerContent)
    {
        $request->validate([
            'title' => 'required',
            'image' => 'nullable|image',
        ]);

        if ($request->file('image')) {
            $imagePath = $request->file('image')->store('images', 'public');
            $partnerContent->image = $imagePath;
        }

        $partnerContent->title = $request->title;
        $partnerContent->save();

        return redirect()->route('admin.partner.index')->with('success', 'Content updated successfully.');
    }

    public function destroy(PartnerContent $partnerContent)
    {
        $partnerContent->delete();
        return redirect()->route('admin.partner.index')->with('success', 'Content deleted successfully.');
    }
}
