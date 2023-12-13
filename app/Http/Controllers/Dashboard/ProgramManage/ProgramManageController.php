<?php

namespace App\Http\Controllers\Dashboard\ProgramManage;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\Dashboard\ProgramManage\ProgramManageInterface;
use App\Http\Requests\Dashboard\ProgramManage\StoreProgramManageRequest;
use App\Http\Requests\Dashboard\ProgramManage\UpdateProgramManageRequest;


class ProgramManageController extends Controller
{
    protected $programManage;

    public function __construct(ProgramManageInterface $programManage)
    {
        $this->programManage = $programManage;
    }



    public function index(Request $request)
    {
        return $this->programManage->index($request);
    }



    public function show($id)
    {
        return $this->programManage->show($id);
    }



    public function store(StoreProgramManageRequest $request)
    {
        return $this->programManage->store($request);
    }



    public function update(UpdateProgramManageRequest $request)
    {
        return $this->programManage->update($request);
    }



    public function destroy(Request $request)
    {
        return $this->programManage->destroy($request);
    }



    public function deleteSelected(Request $request)
    {
        return $this->programManage->deleteSelected($request);
    }
}
