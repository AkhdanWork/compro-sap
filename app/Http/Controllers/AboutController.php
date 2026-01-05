<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Team;

class AboutController extends Controller
{
    public function index()
    {
        $teams = Team::active()->ordered()->get();
        
        return view('about', compact('teams'));
    }
}
