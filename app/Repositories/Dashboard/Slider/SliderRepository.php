<?php

namespace App\Repositories\Dashboard\Slider;

use App\Models\Slider;
use App\Traits\ImageTrait;
use Illuminate\Support\Facades\Storage;

class SliderRepository implements SliderInterface 
{
    use ImageTrait;

    public function index($request)
    {
        $data = Slider::
        when($request->title != null,function ($q) use($request){
            return $q->where('title_ar','like','%'.$request->title.'%');
        })
        ->when($request->title != null,function ($q) use($request){
            return $q->where('title_en','like','%'.$request->title.'%');
        })
        ->when($request->content != null,function ($q) use($request){
            return $q->where('content_ar','like','%'.$request->content.'%');
        })
        ->when($request->content != null,function ($q) use($request){
            return $q->where('content_en','like','%'.$request->content.'%');
        })
        ->when($request->from_date != null,function ($q) use($request){
            return $q->whereDate('created_at','>=',$request->from_date);
        })
        ->when($request->to_date != null,function ($q) use($request){
            return $q->whereDate('created_at','<=',$request->to_date);
        })
        ->paginate(config('myConfig.paginationCount'));
        return view('dashboard.slider.index',compact('data'))
        ->with([
            'title'     => $request->title,
            'content'   => $request->content,
            'from_date' => $request->from_date,
            'to_date'   => $request->to_date,
        ]);
    }



    public function show($id)
    {
        $slider = Slider::findOrFail($id);

        return view('dashboard.slider.show', compact('slider'));
    }



    public function store($request)
    {
        try {
            $validated = $request->validated();
            $inputs    = $request->all();
            //upload image
            if ($request->photo) {
                $photo_name      = $this->uploadImage($request->photo, 'attachments/slider');
                $inputs['photo'] = $photo_name;
            }
            //insert data
            $slider = Slider::create($inputs);
            if (!$slider) {
                session()->flash('error');
                return redirect()->back();
            }

            session()->flash('success');
            return redirect()->back();
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }



    public function update($request)
    {
        try {
            $validated = $request->validated();
            $inputs    = $request->all();
            $slider  = Slider::findOrFail($request->id);
            if (!$slider) {
                session()->flash('error');
                return redirect()->back();
            }
            //upload image
            if ($request->photo) {
                //remove old photo
                Storage::disk('attachments')->delete('slider/' . $slider->photo);
                $photo_name = $this->uploadImage($request->photo, 'attachments/slider');
                $inputs['photo'] = $photo_name;
            } else {
                $inputs['photo'] = $slider->photo;
            }
            if (!$request->add_button) {
                $inputs['add_button'] = 0;
            }
            $slider->update($inputs);
            if (!$slider) {
                session()->flash('error');
                return redirect()->back();
            }
            session()->flash('success');
            return redirect()->back();
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }



    public function destroy($request)
    {
        try {
            // $related_table = realed_model::where('business_id', $request->id)->pluck('business_id');
            // if($related_table->count() == 0) { 
                $slider = Slider::findOrFail($request->id);
                if (!$slider) {
                    session()->flash('error');
                    return redirect()->back();
                }
                Storage::disk('attachments')->delete('slider/' . $slider->photo);
                $slider->delete();
                session()->flash('success');
                return redirect()->back();
            // } else {
                // session()->flash('canNotDeleted');
                // return redirect()->back();
            // }
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }



    public function deleteSelected($request)
    {
        try {
            $delete_selected_id = explode(",", $request->delete_selected_id);
            // foreach($delete_selected_id as $selected_id) {
            //     $related_table = realed_model::where('businessg_id', $selected_id)->pluck('business_id');
            //     if($related_table->count() == 0) {
                    $sliders = Slider::whereIn('id', $delete_selected_id)->get();
                    foreach($sliders as $slider) {
                        Storage::disk('attachments')->delete('slider/' . $slider->photo);
                        $slider->delete();
                    }
                    session()->flash('success');
                    return redirect()->back();
            //     } else {
            //         session()->flash('canNotDeleted');
            //         return redirect()->back();
            //     }
            // }
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }
}
