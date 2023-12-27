<?php

namespace App\Repositories\Site\Program;

use App\Models\Program;
use App\Models\WhyProgram;

class ProgramRepository implements ProgramInterface 
{
    public function index($request)
    {
        $data = Program::paginate(config('myConfig.paginationCount'));
        $whyPrograms = WhyProgram::get();

        return view('site.programs',compact('data','whyPrograms'));
    }



    public function show($id)
    {
        $program     = Program::with('programManages','programAbilities','programPackages')->where('first_title_ar',$id)->orWhere('first_title_en',$id)->first();
        $whyPrograms = WhyProgram::get();

        return view('site.program-defintion', compact('program','whyPrograms'));
    }
}
