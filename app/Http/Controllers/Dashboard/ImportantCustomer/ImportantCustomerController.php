<?php

namespace App\Http\Controllers\Dashboard\ImportantCustomer;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\Dashboard\ImportantCustomer\ImportantCustomerInterface;
use App\Http\Requests\Dashboard\ImportantCustomer\StoreImportantCustomerRequest;
use App\Http\Requests\Dashboard\ImportantCustomer\UpdateImportantCustomerRequest;


class ImportantCustomerController extends Controller
{
    protected $importantCustomer;

    public function __construct(ImportantCustomerInterface $importantCustomer)
    {
        $this->importantCustomer = $importantCustomer;
    }



    public function index(Request $request)
    {
        return $this->importantCustomer->index($request);
    }



    public function show($id)
    {
        return $this->importantCustomer->show($id);
    }



    public function store(StoreImportantCustomerRequest $request)
    {
        return $this->importantCustomer->store($request);
    }



    public function update(UpdateImportantCustomerRequest $request)
    {
        return $this->importantCustomer->update($request);
    }



    public function destroy(Request $request)
    {
        return $this->importantCustomer->destroy($request);
    }



    public function deleteSelected(Request $request)
    {
        return $this->importantCustomer->deleteSelected($request);
    }
}
