<?php

namespace App\Http\Controllers\Dashboard\ProgramPackage;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\Dashboard\ProgramPackage\ProgramPackageInterface;
use App\Http\Requests\Dashboard\ProgramPackage\StoreProgramPackageRequest;
use App\Http\Requests\Dashboard\ProgramPackage\UpdateProgramPackageRequest;


class ProgramPackageController extends Controller
{
    protected $programPackage;

    public function __construct(ProgramPackageInterface $programPackage)
    {
        $this->programPackage = $programPackage;
    }



    public function index(Request $request)
    {
        return $this->programPackage->index($request);
    }



    public function show($id)
    {
        return $this->programPackage->show($id);
    }



    public function store(StoreProgramPackageRequest $request)
    {
        return $this->programPackage->store($request);
    }



    public function update(UpdateProgramPackageRequest $request)
    {
        return $this->programPackage->update($request);
    }



    public function destroy(Request $request)
    {
        return $this->programPackage->destroy($request);
    }



    public function deleteSelected(Request $request)
    {
        return $this->programPackage->deleteSelected($request);
    }
}
