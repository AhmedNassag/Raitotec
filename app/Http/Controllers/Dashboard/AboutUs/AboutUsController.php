<?php

namespace App\Http\Controllers\Dashboard\AboutUs;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\Dashboard\AboutUs\AboutUsInterface;
use App\Http\Requests\Dashboard\AboutUs\StoreAboutUsRequest;
use App\Http\Requests\Dashboard\AboutUs\UpdateAboutUsRequest;


class AboutUsController extends Controller
{
    protected $aboutUs;

    public function __construct(AboutUsInterface $aboutUs)
    {
        $this->aboutUs = $aboutUs;
    }



    public function index(Request $request)
    {
        return $this->aboutUs->index($request);
    }



    public function show($id)
    {
        return $this->aboutUs->show($id);
    }



    public function store(StoreAboutUsRequest $request)
    {
        return $this->aboutUs->store($request);
    }



    public function update(UpdateAboutUsRequest $request)
    {
        return $this->aboutUs->update($request);
    }



    public function destroy(Request $request)
    {
        return $this->aboutUs->destroy($request);
    }



    public function deleteSelected(Request $request)
    {
        return $this->aboutUs->deleteSelected($request);
    }
}
