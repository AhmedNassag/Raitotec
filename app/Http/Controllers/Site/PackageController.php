<?php

namespace App\Http\Controllers\Site;

use App\Repositories\Site\Package\PackageInterface;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PackageController extends Controller
{
    protected $package;

    public function __construct(PackageInterface $package)
    {
        $this->package = $package;
    }



    public function index(Request $request)
    {
        return $this->package->index($request);
    }
}
