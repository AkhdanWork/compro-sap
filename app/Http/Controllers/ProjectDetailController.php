<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HomeContent;
use App\Models\WeddingContent;
use App\Models\GraphicContent;
use App\Models\dModelContent;

class ProjectDetailController extends Controller
{
    public function index(Request $request)
    {
        $category = $request->get('category', 'all');
        $projects = collect();

        if ($category === 'all' || $category === 'event') {
            $events = HomeContent::orderBy('date', 'desc')->get()->map(function($item) {
                $item->category = 'Event Organizer';
                $item->type = 'event';
                return $item;
            });
            $projects = $projects->merge($events);
        }

        if ($category === 'all' || $category === 'wedding') {
            $weddings = WeddingContent::orderBy('date', 'desc')->get()->map(function($item) {
                $item->category = 'Wedding Organizer';
                $item->type = 'wedding';
                return $item;
            });
            $projects = $projects->merge($weddings);
        }

        if ($category === 'all' || $category === 'graphic') {
            $graphics = GraphicContent::orderBy('date', 'desc')->get()->map(function($item) {
                $item->category = 'Graphic Design';
                $item->type = 'graphic';
                return $item;
            });
            $projects = $projects->merge($graphics);
        }

        if ($category === 'all' || $category === 'modelling') {
            $modellings = dModelContent::orderBy('date', 'desc')->get()->map(function($item) {
                $item->category = '3D Modelling & Rendering';
                $item->type = 'modelling';
                return $item;
            });
            $projects = $projects->merge($modellings);
        }

        $projects = $projects->sortByDesc('date')->values();

        return view('projects.all', compact('projects', 'category'));
    }

    public function show($type, $id)
    {
        $project = null;
        
        switch($type) {
            case 'event':
                $project = HomeContent::findOrFail($id);
                $project->category = 'Event Organizer';
                $project->type = 'event';
                break;
            case 'wedding':
                $project = WeddingContent::findOrFail($id);
                $project->category = 'Wedding Organizer';
                $project->type = 'wedding';
                break;
            case 'graphic':
                $project = GraphicContent::findOrFail($id);
                $project->category = 'Graphic Design';
                $project->type = 'graphic';
                break;
            case 'modelling':
                $project = dModelContent::findOrFail($id);
                $project->category = '3D Modelling & Rendering';
                $project->type = 'modelling';
                break;
            default:
                abort(404);
        }

        return view('projects.show', compact('project'));
    }
}