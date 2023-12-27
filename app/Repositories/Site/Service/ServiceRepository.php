<?php

namespace App\Repositories\Site\Service;

use App\Models\Service;
use App\Models\WhyUs;
use App\Models\ImportantCustomer;

class ServiceRepository implements ServiceInterface 
{
    public function index($request)
    {
        $services = Service::get();
        $whyUs    = WhyUs::get();
        $importantCustomers = ImportantCustomer::get();

        return view('site.services',compact('services','whyUs','importantCustomers'));
    }



    public function show($id)
    {
        $service = Service::with('serviceSupports','serviceReasons','serviceSteps')->where('slug_ar',$id)->orWhere('slug_en',$id)->first();

        return view('site.service-defintion', compact('service'));
    }
}
