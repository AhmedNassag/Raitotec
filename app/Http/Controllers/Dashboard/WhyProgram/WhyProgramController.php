<?php

namespace App\Http\Controllers\Dashboard\WhyProgram;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\Dashboard\WhyProgram\WhyProgramInterface;
use App\Http\Requests\Dashboard\WhyProgram\StoreWhyProgramRequest;
use App\Http\Requests\Dashboard\WhyProgram\UpdateWhyProgramRequest;


class WhyProgramController extends Controller
{
    protected $whyProgram;

    public function __construct(WhyProgramInterface $whyProgram)
    {
        $this->whyProgram = $whyProgram;
    }



    public function index(Request $request)
    {
        return $this->whyProgram->index($request);
    }



    public function show($id)
    {
        return $this->whyProgram->show($id);
    }



    public function store(StoreWhyProgramRequest $request)
    {
        return $this->whyProgram->store($request);
    }



    public function update(UpdateWhyProgramRequest $request)
    {
        return $this->whyProgram->update($request);
    }



    public function destroy(Request $request)
    {
        return $this->whyProgram->destroy($request);
    }



    public function deleteSelected(Request $request)
    {
        return $this->whyProgram->deleteSelected($request);
    }
}
