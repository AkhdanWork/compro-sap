<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HomeContent;
use App\Models\PartnerContent;
use App\Models\Testimonial;

class HomeController extends Controller
{
    public function index()
    {
        // Sample data for the carousel
        $carouselProjectItems = HomeContent::all()->toArray();

        $carouselPartnerItems = PartnerContent::all()->toArray();
        $testimonials = Testimonial::active()->ordered()->get();

        return view('home', compact('carouselProjectItems','carouselPartnerItems', 'testimonials'));
    }
}