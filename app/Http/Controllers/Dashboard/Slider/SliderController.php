<?php

namespace App\Http\Controllers\Dashboard\Slider;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\Dashboard\Slider\SliderInterface;
use App\Http\Requests\Dashboard\Slider\StoreSliderRequest;
use App\Http\Requests\Dashboard\Slider\UpdateSliderRequest;


class SliderController extends Controller
{
    protected $slider;

    public function __construct(SliderInterface $slider)
    {
        $this->slider = $slider;
    }



    public function index(Request $request)
    {
        return $this->slider->index($request);
    }



    public function show($id)
    {
        return $this->slider->show($id);
    }



    public function store(StoreSliderRequest $request)
    {
        return $this->slider->store($request);
    }



    public function update(UpdateSliderRequest $request)
    {
        return $this->slider->update($request);
    }



    public function destroy(Request $request)
    {
        return $this->slider->destroy($request);
    }



    public function deleteSelected(Request $request)
    {
        return $this->slider->deleteSelected($request);
    }
}
