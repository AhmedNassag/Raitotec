<?php

namespace App\Repositories\Site\Home;

use App\Models\Slider;
use App\Models\AboutUs;
use App\Models\WhyUs;
use App\Models\Program;
use App\Models\Service;
use App\Models\Blog;
use App\Models\Sale;

class HomeRepository implements HomeInterface 
{
    public function index($request)
    {
        $sliders            = Slider::get();
        $aboutUs            = AboutUs::first();
        $whyUs              = WhyUs::limit(6)->get();
        $programs           = Program::limit(6)->get();
        $services           = Service::limit(3)->get();
        $blogs              = Blog::limit(4)->get();
        $sale               = Sale::first();

        return view('site.index',compact('sliders', 'aboutUs', 'whyUs', 'programs', 'services', 'blogs', 'sale'));
    }
}
