<?php

namespace App\Http\Controllers\Site;

use App\Repositories\Site\AboutUs\AboutUsInterface;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AboutUsController extends Controller
{
    protected $aboutUs;

    public function __construct(AboutUsInterface $aboutUs)
    {
        $this->aboutUs = $aboutUs;
    }



    public function index(Request $request)
    {
        return $this->aboutUs->index($request);
    }
}
