<?php

namespace App\Http\Controllers\Dashboard\Service;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\Dashboard\Service\ServiceInterface;
use App\Http\Requests\Dashboard\Service\StoreServiceRequest;
use App\Http\Requests\Dashboard\Service\UpdateServiceRequest;


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



    public function store(StoreServiceRequest $request)
    {
        return $this->service->store($request);
    }



    public function update(UpdateServiceRequest $request)
    {
        return $this->service->update($request);
    }



    public function destroy(Request $request)
    {
        return $this->service->destroy($request);
    }



    public function deleteSelected(Request $request)
    {
        return $this->service->deleteSelected($request);
    }
}
