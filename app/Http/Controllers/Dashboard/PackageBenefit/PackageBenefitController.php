<?php

namespace App\Http\Controllers\Dashboard\PackageBenefit;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\Dashboard\PackageBenefit\PackageBenefitInterface;
use App\Http\Requests\Dashboard\PackageBenefit\StorePackageBenefitRequest;
use App\Http\Requests\Dashboard\PackageBenefit\UpdatePackageBenefitRequest;


class PackageBenefitController extends Controller
{
    protected $packageBenefit;

    public function __construct(PackageBenefitInterface $packageBenefit)
    {
        $this->packageBenefit = $packageBenefit;
    }



    public function index(Request $request)
    {
        return $this->packageBenefit->index($request);
    }



    public function show($id)
    {
        return $this->packageBenefit->show($id);
    }



    public function store(StorePackageBenefitRequest $request)
    {
        return $this->packageBenefit->store($request);
    }



    public function update(UpdatePackageBenefitRequest $request)
    {
        return $this->packageBenefit->update($request);
    }



    public function destroy(Request $request)
    {
        return $this->packageBenefit->destroy($request);
    }



    public function deleteSelected(Request $request)
    {
        return $this->packageBenefit->deleteSelected($request);
    }
}
