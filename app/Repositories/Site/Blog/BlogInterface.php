<?php

namespace App\Repositories\Site\Blog;

interface BlogInterface 
{
    public function index($request);

    public function show($id);
}
