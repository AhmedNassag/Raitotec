<?php

namespace App\Repositories\Dashboard\ProgramPackage;

interface ProgramPackageInterface 
{
    public function index($request);

    public function show($id);
        
    public function store($request);

    public function update($request);

    public function destroy($request);

    public function deleteSelected($request);

}
