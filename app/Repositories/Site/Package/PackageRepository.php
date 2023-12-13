<?php

namespace App\Repositories\Site\Package;

use App\Models\Package;

class PackageRepository implements PackageInterface 
{
    public function index($request)
    {
        $data = Package::with('packageBenefits')->get();

        return view('site.packages',compact('data'));
    }
}
