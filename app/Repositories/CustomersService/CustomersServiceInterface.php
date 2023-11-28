<?php

namespace App\Repositories\CustomersService;

interface CustomersServiceInterface 
{
    public function index($request);
        
    public function store($request);

    public function update($request);

    public function destroy($request);

    public function deleteSelected($request);
}
