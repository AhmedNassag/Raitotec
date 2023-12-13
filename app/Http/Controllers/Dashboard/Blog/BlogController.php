<?php

namespace App\Http\Controllers\Dashboard\Blog;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\Dashboard\Blog\BlogInterface;
use App\Http\Requests\Dashboard\Blog\StoreBlogRequest;
use App\Http\Requests\Dashboard\Blog\UpdateBlogRequest;


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



    public function store(StoreBlogRequest $request)
    {
        return $this->blog->store($request);
    }



    public function update(UpdateBlogRequest $request)
    {
        return $this->blog->update($request);
    }



    public function destroy(Request $request)
    {
        return $this->blog->destroy($request);
    }



    public function deleteSelected(Request $request)
    {
        return $this->blog->deleteSelected($request);
    }
}
