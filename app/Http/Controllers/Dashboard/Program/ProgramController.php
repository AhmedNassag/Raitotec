<?php

namespace App\Http\Controllers\Dashboard\Program;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\Dashboard\Program\ProgramInterface;
use App\Http\Requests\Dashboard\Program\StoreProgramRequest;
use App\Http\Requests\Dashboard\Program\UpdateProgramRequest;


class ProgramController extends Controller
{
    protected $program;

    public function __construct(ProgramInterface $program)
    {
        $this->program = $program;
    }



    public function index(Request $request)
    {
        return $this->program->index($request);
    }



    public function show($id)
    {
        return $this->program->show($id);
    }



    public function store(StoreProgramRequest $request)
    {
        return $this->program->store($request);
    }



    public function update(UpdateProgramRequest $request)
    {
        return $this->program->update($request);
    }



    public function destroy(Request $request)
    {
        return $this->program->destroy($request);
    }



    public function deleteSelected(Request $request)
    {
        return $this->program->deleteSelected($request);
    }
}
