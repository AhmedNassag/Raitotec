<?php

namespace App\Http\Controllers\Site;

use App\Repositories\Site\Service\ServiceInterface;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    protected $service;

    public function __construct(ServiceInterface $service)
    {
        $this->service = $service;
    }



    public function index(Request $request)
    {
        return $this->service->index($request);
    }



    public function show($id)
    {
        return $this->service->show($id);
    }
}
