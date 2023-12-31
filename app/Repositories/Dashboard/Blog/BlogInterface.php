<?php

namespace App\Repositories\Dashboard\Blog;

interface BlogInterface 
{
    public function index($request);

    public function show($id);

    public function create();
        
    public function store($request);

    public function edit($id);

    public function update($request);

    public function destroy($request);

    public function deleteSelected($request);

}
