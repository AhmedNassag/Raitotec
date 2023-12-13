<?php

namespace App\Repositories\Dashboard\Message;

interface MessageInterface 
{
    public function index($request);

    public function destroy($request);

    public function deleteSelected($request);

}
