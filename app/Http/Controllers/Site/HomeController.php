<?php

namespace App\Http\Controllers\Site;

use App\Repositories\Site\Home\HomeInterface;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    protected $home;

    public function __construct(HomeInterface $home)
    {
        $this->home = $home;
    }



    public function index(Request $request)
    {
        return $this->home->index($request);
    }
}
