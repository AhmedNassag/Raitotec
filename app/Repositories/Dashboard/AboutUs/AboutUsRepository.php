<?php

namespace App\Repositories\Dashboard\AboutUs;

use App\Models\AboutUs;
use App\Traits\ImageTrait;
use Illuminate\Support\Facades\Storage;

class AboutUsRepository implements AboutUsInterface 
{
    use ImageTrait;

    public function index($request)
    {
        $data = AboutUs::
        when($request->content != null,function ($q) use($request){
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
        return view('dashboard.aboutUs.index',compact('data'))
        ->with([
            'content'   => $request->content,
            'from_date' => $request->from_date,
            'to_date'   => $request->to_date,
        ]);
    }



    public function show($id)
    {
        $aboutUs = AboutUs::findOrFail($id);

        return view('dashboard.aboutUs.show', compact('aboutUs'));
    }



    public function store($request)
    {
        try {
            $validated = $request->validated();
            $inputs    = $request->all();
            //upload video
            if ($request->video) {
                $video_name      = $this->uploadImage($request->video, 'attachments/aboutUs');
                $inputs['video'] = $video_name;
            }
            //insert data
            $aboutUs = AboutUs::create($inputs);
            if (!$aboutUs) {
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
            $aboutUs   = AboutUs::findOrFail($request->id);
            if (!$aboutUs) {
                session()->flash('error');
                return redirect()->back();
            }
            //upload image
            if ($request->video) {
                //remove old video
                Storage::disk('attachments')->delete('aboutUs/' . $aboutUs->video);
                $video_name = $this->uploadImage($request->video, 'attachments/aboutUs');
                $inputs['video'] = $video_name;
            } else {
                $inputs['video'] = $aboutUs->video;
            }
            $aboutUs->update($inputs);
            if (!$aboutUs) {
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
                $aboutUs = AboutUs::findOrFail($request->id);
                if (!$aboutUs) {
                    session()->flash('error');
                    return redirect()->back();
                }
                Storage::disk('attachments')->delete('aboutUs/' . $aboutUs->video);
                $aboutUs->delete();
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
                    $aboutUs = AboutUs::whereIn('id', $delete_selected_id)->get();
                    foreach($aboutUs as $item) {
                        Storage::disk('attachments')->delete('aboutUs/' . $item->video);
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
