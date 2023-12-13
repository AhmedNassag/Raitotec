<?php

namespace App\Http\Controllers\Dashboard\CompanyInformation;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\Dashboard\CompanyInformation\CompanyInformationInterface;
use App\Http\Requests\Dashboard\CompanyInformation\StoreCompanyInformationRequest;
use App\Http\Requests\Dashboard\CompanyInformation\UpdateCompanyInformationRequest;


class CompanyInformationController extends Controller
{
    protected $companyInformation;

    public function __construct(CompanyInformationInterface $companyInformation)
    {
        $this->companyInformation = $companyInformation;
    }



    public function index(Request $request)
    {
        return $this->companyInformation->index($request);
    }



    public function store(StoreCompanyInformationRequest $request)
    {
        return $this->companyInformation->store($request);
    }



    public function update(UpdateCompanyInformationRequest $request)
    {
        return $this->companyInformation->update($request);
    }



    public function destroy(Request $request)
    {
        return $this->companyInformation->destroy($request);
    }



    public function deleteSelected(Request $request)
    {
        return $this->companyInformation->deleteSelected($request);
    }
}
