<?php

namespace App\Http\Controllers\Dashboard\ServiceReason;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\Dashboard\ServiceReason\ServiceReasonInterface;
use App\Http\Requests\Dashboard\ServiceReason\StoreServiceReasonRequest;
use App\Http\Requests\Dashboard\ServiceReason\UpdateServiceReasonRequest;


class ServiceReasonController extends Controller
{
    protected $serviceReason;

    public function __construct(ServiceReasonInterface $serviceReason)
    {
        $this->serviceReason = $serviceReason;
    }



    public function index(Request $request)
    {
        return $this->serviceReason->index($request);
    }



    public function show($id)
    {
        return $this->serviceReason->show($id);
    }



    public function store(StoreServiceReasonRequest $request)
    {
        return $this->serviceReason->store($request);
    }



    public function update(UpdateServiceReasonRequest $request)
    {
        return $this->serviceReason->update($request);
    }



    public function destroy(Request $request)
    {
        return $this->serviceReason->destroy($request);
    }



    public function deleteSelected(Request $request)
    {
        return $this->serviceReason->deleteSelected($request);
    }
}
