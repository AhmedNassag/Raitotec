<?php

namespace App\Http\Controllers\Site;

use App\Repositories\Site\Program\ProgramInterface;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

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
}
