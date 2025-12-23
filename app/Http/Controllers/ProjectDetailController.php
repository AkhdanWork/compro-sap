<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HomeContent;
use App\Models\dModelContent;
use App\Models\PartnerContent;
use App\Models\WeddingContent;
use App\Models\GraphicContent;

class ProjectDetailController extends Controller
{
    public function index(Request $request)
    {
        $category = $request->get('category', 'all');
        
        $projects = collect();

        if ($category === 'all' || $category === 'event') {
            $events = HomeContent::all()->map(function($item) {
                $item->category = 'Corporate Event';
                return $item;
            });
            $projects = $projects->merge($events);
        }

        if ($category === 'all' || $category === 'wedding') {
            $weddings = WeddingContent::all()->map(function($item) {
                $item->category = 'Wedding';
                return $item;
            });
            $projects = $projects->merge($weddings);
        }

        if ($category === 'all' || $category === 'modelling') {
            $modellings = dModelContent::all()->map(function($item) {
                $item->category = '3D Modelling & Rendering';
                return $item;
            });
            $projects = $projects->merge($modellings);
        }

        if ($category === 'all' || $category === 'graphic') {
            $graphics = GraphicContent::all()->map(function($item) {
                $item->category = 'Graphic Design';
                return $item;
            });
            $projects = $projects->merge($graphics);
        }

        $projects = $projects->sortByDesc('created_at');

        return view('projects.all', compact('projects', 'category'));
    }

    public function show($id)
    {
        $project = HomeContent::find($id) 
                ?? WeddingContent::find($id) 
                ?? dModelContent::find($id)
                ?? GraphicContent::find($id);

        if (!$project) {
            abort(404);
        }

        return view('projects.show', compact('project'));
    }
}