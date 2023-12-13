<?php

namespace App\Repositories\Dashboard\WhyUs;

use App\Models\WhyUs;
use App\Traits\ImageTrait;
use Illuminate\Support\Facades\Storage;

class WhyUsRepository implements WhyUsInterface 
{
    use ImageTrait;

    public function index($request)
    {
        $data = WhyUs::
        when($request->content != null,function ($q) use($request){
            return $q->where('title_ar','like','%'.$request->title.'%');
        })
        ->when($request->content != null,function ($q) use($request){
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
        return view('dashboard.whyUs.index',compact('data'))
        ->with([
            'title'     => $request->title,
            'content'   => $request->content,
            'from_date' => $request->from_date,
            'to_date'   => $request->to_date,
        ]);
    }



    public function show($id)
    {
        $whyUs = WhyUs::findOrFail($id);

        return view('dashboard.whyUs.show', compact('blog'));
    }



    public function store($request)
    {
        try {
            $validated = $request->validated();
            $inputs    = $request->all();
            //upload image
            if ($request->photo) {
                $photo_name      = $this->uploadImage($request->photo, 'attachments/whyUs');
                $inputs['photo'] = $photo_name;
            }
            //insert data
            $whyUs = WhyUs::create($inputs);
            if (!$whyUs) {
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
            $whyUs  = WhyUs::findOrFail($request->id);
            if (!$whyUs) {
                session()->flash('error');
                return redirect()->back();
            }
            //upload image
            if ($request->photo) {
                //remove old photo
                Storage::disk('attachments')->delete('whyUs/' . $whyUs->photo);
                $photo_name = $this->uploadImage($request->photo, 'attachments/whyUs');
                $inputs['photo'] = $photo_name;
            } else {
                $inputs['photo'] = $whyUs->photo;
            }
            $whyUs->update($inputs);
            if (!$whyUs) {
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
                $whyUs = WhyUs::findOrFail($request->id);
                if (!$whyUs) {
                    session()->flash('error');
                    return redirect()->back();
                }
                Storage::disk('attachments')->delete('whyUs/' . $whyUs->photo);
                $whyUs->delete();
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
                    $whyUs = WhyUs::whereIn('id', $delete_selected_id)->get();
                    foreach($whyUs as $item) {
                        Storage::disk('attachments')->delete('whyUs/' . $item->photo);
                        $item->delete();
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
