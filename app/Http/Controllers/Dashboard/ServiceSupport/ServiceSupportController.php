<?php

namespace App\Http\Controllers\Dashboard\ServiceSupport;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\Dashboard\ServiceSupport\ServiceSupportInterface;
use App\Http\Requests\Dashboard\ServiceSupport\StoreServiceSupportRequest;
use App\Http\Requests\Dashboard\ServiceSupport\UpdateServiceSupportRequest;


class ServiceSupportController extends Controller
{
    protected $serviceSupport;

    public function __construct(ServiceSupportInterface $serviceSupport)
    {
        $this->serviceSupport = $serviceSupport;
    }



    public function index(Request $request)
    {
        return $this->serviceSupport->index($request);
    }



    public function show($id)
    {
        return $this->serviceSupport->show($id);
    }



    public function store(StoreServiceSupportRequest $request)
    {
        return $this->serviceSupport->store($request);
    }



    public function update(UpdateServiceSupportRequest $request)
    {
        return $this->serviceSupport->update($request);
    }



    public function destroy(Request $request)
    {
        return $this->serviceSupport->destroy($request);
    }



    public function deleteSelected(Request $request)
    {
        return $this->serviceSupport->deleteSelected($request);
    }
}
