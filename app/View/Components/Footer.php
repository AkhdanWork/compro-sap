<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Models\SocialMedia;

class Footer extends Component
{
    public $socialMedia;

    public function __construct()
    {
        $this->socialMedia = SocialMedia::active()->ordered()->get();
    }

    public function render()
    {
        return view('components.footer');
    }
}