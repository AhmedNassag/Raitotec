<?php

namespace App\Repositories\Site\Business;

use App\Models\Business;
use App\Models\WhyUs;
use App\Models\ImportantCustomer;

class BusinessRepository implements BusinessInterface 
{
    public function index($request)
    {
        $business = Business::with('businessPhotos')->get();
        $whyUs    = WhyUs::get();
        $importantCustomers = ImportantCustomer::get();

        return view('site.business',compact('business','whyUs','importantCustomers'));
    }
}
