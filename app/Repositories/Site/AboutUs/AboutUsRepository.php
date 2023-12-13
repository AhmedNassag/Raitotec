<?php

namespace App\Repositories\Site\AboutUs;

use App\Models\AboutUs;
use App\Models\WhyUs;
use App\Models\ImportantCustomer;

class AboutUsRepository implements AboutUsInterface 
{
    public function index($request)
    {
        $aboutUs = AboutUs::first();
        $whyUs = WhyUs::get();
        $importantCustomers = ImportantCustomer::get();
        return view('site.about',compact('aboutUs','whyUs','importantCustomers'));
    }
}
