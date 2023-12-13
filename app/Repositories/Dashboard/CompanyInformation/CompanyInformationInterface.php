<?php

namespace App\Repositories\Dashboard\CompanyInformation;

interface CompanyInformationInterface 
{
    public function index($request);
        
    public function store($request);

    public function update($request);

    public function destroy($request);

    public function deleteSelected($request);
}
