<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {

        $carouselPartnerItems = [
            [
                'image' => asset('img/cover.png')
            ],
            [
                'image' => asset('img/cover.png')
            ],
            [
                'image' => asset('img/cover.png')
            ],
            [
                'image' => asset('img/cover.png')
            ],
            [
                'image' => asset('img/cover.png')
            ],
            [
                'image' => asset('img/cover.png')
            ],
            [
                'image' => asset('img/cover.png')
            ],
            [
                'image' => asset('img/cover.png')
            ],
            [
                'image' => asset('img/cover.png')
            ],
            [
                'image' => asset('img/cover.png')
            ],
            [
                'image' => asset('img/cover.png')
            ],
            [
                'image' => asset('img/cover.png')
            ],
            [
                'image' => asset('img/cover.png')
            ],
            [
                'image' => asset('img/cover.png')
            ],
        ];

        return view('service', compact('carouselPartnerItems'));
    }
}
