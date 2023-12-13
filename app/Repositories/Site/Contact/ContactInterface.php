<?php

namespace App\Repositories\Site\Contact;

interface ContactInterface 
{
    public function index($request);

    public function store($request);
}
