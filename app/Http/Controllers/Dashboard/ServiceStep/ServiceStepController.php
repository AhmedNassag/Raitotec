<?php

namespace App\Http\Controllers\Dashboard\ServiceStep;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\Dashboard\ServiceStep\ServiceStepInterface;
use App\Http\Requests\Dashboard\ServiceStep\StoreServiceStepRequest;
use App\Http\Requests\Dashboard\ServiceStep\UpdateServiceStepRequest;


class ServiceStepController extends Controller
{
    protected $serviceStep;

    public function __construct(ServiceStepInterface $serviceStep)
    {
        $this->serviceStep = $serviceStep;
    }



    public function index(Request $request)
    {
        return $this->serviceStep->index($request);
    }



    public function show($id)
    {
        return $this->serviceStep->show($id);
    }



    public function store(StoreServiceStepRequest $request)
    {
        return $this->serviceStep->store($request);
    }



    public function update(UpdateServiceStepRequest $request)
    {
        return $this->serviceStep->update($request);
    }



    public function destroy(Request $request)
    {
        return $this->serviceStep->destroy($request);
    }



    public function deleteSelected(Request $request)
    {
        return $this->serviceStep->deleteSelected($request);
    }
}
