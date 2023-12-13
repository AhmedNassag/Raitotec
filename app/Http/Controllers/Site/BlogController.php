<?php

namespace App\Http\Controllers\Site;

use App\Repositories\Site\Blog\BlogInterface;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    protected $blog;

    public function __construct(BlogInterface $blog)
    {
        $this->blog = $blog;
    }



    public function index(Request $request)
    {
        return $this->blog->index($request);
    }



    public function show($id)
    {
        return $this->blog->show($id);
    }
}
