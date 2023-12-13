<?php

namespace App\Http\Controllers\Dashboard\WhyUs;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\Dashboard\WhyUs\WhyUsInterface;
use App\Http\Requests\Dashboard\WhyUs\StoreWhyUsRequest;
use App\Http\Requests\Dashboard\WhyUs\UpdateWhyUsRequest;


class WhyUsController extends Controller
{
    protected $whyUs;

    public function __construct(WhyUsInterface $whyUs)
    {
        $this->whyUs = $whyUs;
    }



    public function index(Request $request)
    {
        return $this->whyUs->index($request);
    }



    public function show($id)
    {
        return $this->whyUs->show($id);
    }



    public function store(StoreWhyUsRequest $request)
    {
        return $this->whyUs->store($request);
    }



    public function update(UpdateWhyUsRequest $request)
    {
        return $this->whyUs->update($request);
    }



    public function destroy(Request $request)
    {
        return $this->whyUs->destroy($request);
    }



    public function deleteSelected(Request $request)
    {
        return $this->whyUs->deleteSelected($request);
    }
}
