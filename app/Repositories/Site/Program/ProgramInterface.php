<?php

namespace App\Repositories\Site\Program;

interface ProgramInterface 
{
    public function index($request);

    public function show($id);
}
