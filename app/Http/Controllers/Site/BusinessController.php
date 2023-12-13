<?php

namespace App\Http\Controllers\Site;

use App\Repositories\Site\Business\BusinessInterface;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BusinessController extends Controller
{
    protected $business;

    public function __construct(BusinessInterface $business)
    {
        $this->business = $business;
    }



    public function index(Request $request)
    {
        return $this->business->index($request);
    }
}
