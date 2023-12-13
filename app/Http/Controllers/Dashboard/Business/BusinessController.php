<?php

namespace App\Http\Controllers\Dashboard\Business;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\Dashboard\Business\BusinessInterface;
use App\Http\Requests\Dashboard\Business\StoreBusinessRequest;
use App\Http\Requests\Dashboard\Business\UpdateBusinessRequest;


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



    public function show($id)
    {
        return $this->business->show($id);
    }



    public function store(StoreBusinessRequest $request)
    {
        return $this->business->store($request);
    }



    public function update(UpdateBusinessRequest $request)
    {
        return $this->business->update($request);
    }



    public function destroy(Request $request)
    {
        return $this->business->destroy($request);
    }



    public function deleteSelected(Request $request)
    {
        return $this->business->deleteSelected($request);
    }
}
