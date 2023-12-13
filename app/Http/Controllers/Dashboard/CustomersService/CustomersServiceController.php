<?php

namespace App\Http\Controllers\Dashboard\CustomersService;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\Dashboard\CustomersService\CustomersServiceInterface;
use App\Http\Requests\Dashboard\CustomersService\StoreCustomersServiceRequest;
use App\Http\Requests\Dashboard\CustomersService\UpdateCustomersServiceRequest;


class CustomersServiceController extends Controller
{
    protected $customersService;

    public function __construct(CustomersServiceInterface $customersService)
    {
        $this->customersService = $customersService;
    }



    public function index(Request $request)
    {
        $data = $this->customersService->index($request);
        return view('dashboard.customersService.index',compact('data'))
        ->with([
            'whatsapp'  => $request->whatsapp,
            'phone'     => $request->phone,
            'from_date' => $request->from_date,
            'to_date'   => $request->to_date,
        ]);
    }



    public function store(StoreCustomersServiceRequest $request)
    {
        return $this->customersService->store($request);
    }



    public function update(UpdateCustomersServiceRequest $request)
    {
        return $this->customersService->update($request);
    }



    public function destroy(Request $request)
    {
        return $this->customersService->destroy($request);
    }



    public function deleteSelected(Request $request)
    {
        return $this->customersService->deleteSelected($request);
    }
}
