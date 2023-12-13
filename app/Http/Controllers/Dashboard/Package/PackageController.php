<?php

namespace App\Http\Controllers\Dashboard\Package;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\Dashboard\Package\PackageInterface;
use App\Http\Requests\Dashboard\Package\StorePackageRequest;
use App\Http\Requests\Dashboard\Package\UpdatePackageRequest;


class PackageController extends Controller
{
    protected $package;

    public function __construct(PackageInterface $package)
    {
        $this->package = $package;
    }



    public function index(Request $request)
    {
        return $this->package->index($request);
    }



    public function show($id)
    {
        return $this->package->show($id);
    }



    public function store(StorePackageRequest $request)
    {
        return $this->package->store($request);
    }



    public function update(UpdatePackageRequest $request)
    {
        return $this->package->update($request);
    }



    public function destroy(Request $request)
    {
        return $this->package->destroy($request);
    }



    public function deleteSelected(Request $request)
    {
        return $this->package->deleteSelected($request);
    }
}
