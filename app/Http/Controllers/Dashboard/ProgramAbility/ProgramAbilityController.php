<?php

namespace App\Http\Controllers\Dashboard\ProgramAbility;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\Dashboard\ProgramAbility\ProgramAbilityInterface;
use App\Http\Requests\Dashboard\ProgramAbility\StoreProgramAbilityRequest;
use App\Http\Requests\Dashboard\ProgramAbility\UpdateProgramAbilityRequest;


class ProgramAbilityController extends Controller
{
    protected $programAbility;

    public function __construct(ProgramAbilityInterface $programAbility)
    {
        $this->programAbility = $programAbility;
    }



    public function index(Request $request)
    {
        return $this->programAbility->index($request);
    }



    public function show($id)
    {
        return $this->programAbility->show($id);
    }



    public function store(StoreProgramAbilityRequest $request)
    {
        return $this->programAbility->store($request);
    }



    public function update(UpdateProgramAbilityRequest $request)
    {
        return $this->programAbility->update($request);
    }



    public function destroy(Request $request)
    {
        return $this->programAbility->destroy($request);
    }



    public function deleteSelected(Request $request)
    {
        return $this->programAbility->deleteSelected($request);
    }
}
