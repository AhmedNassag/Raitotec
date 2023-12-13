<?php

namespace App\Repositories\Dashboard\WhyProgram;

use App\Models\WhyProgram;
use App\Traits\ImageTrait;
use Illuminate\Support\Facades\Storage;

class WhyProgramRepository implements WhyProgramInterface 
{
    use ImageTrait;

    public function index($request)
    {
        $data = WhyProgram::
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
        return view('dashboard.whyProgram.index',compact('data'))
        ->with([
            'title'     => $request->title,
            'content'   => $request->content,
            'from_date' => $request->from_date,
            'to_date'   => $request->to_date,
        ]);
    }



    public function show($id)
    {
        $whyProgram = WhyProgram::findOrFail($id);

        return view('dashboard.whyProgram.show', compact('whyProgram'));
    }



    public function store($request)
    {
        try {
            $validated = $request->validated();
            $inputs    = $request->all();
            //upload image
            if ($request->photo) {
                $photo_name      = $this->uploadImage($request->photo, 'attachments/whyProgram');
                $inputs['photo'] = $photo_name;
            }
            //insert data
            $whyProgram = WhyProgram::create($inputs);
            if (!$whyProgram) {
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
        // dd($request->all());
        try {
            $validated   = $request->validated();
            $inputs      = $request->all();
            $whyProgram  = WhyProgram::findOrFail($request->id);
            if (!$whyProgram) {
                session()->flash('error');
                return redirect()->back();
            }
            //upload image
            if ($request->photo) {
                //remove old photo
                Storage::disk('attachments')->delete('whyProgram/' . $whyProgram->photo);
                $photo_name = $this->uploadImage($request->photo, 'attachments/whyProgram');
                $inputs['photo'] = $photo_name;
            } else {
                $inputs['photo'] = $whyProgram->photo;
            }
            $whyProgram->update($inputs);
            if (!$whyProgram) {
                session()->flash('error');
                return redirect()->back();
            }
            session()->flash('success');
            return redirect()->back();
        } catch (\Exception $e) {
            dd($e->getMessage());
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }



    public function destroy($request)
    {
        try {
            // $related_table = realed_model::where('business_id', $request->id)->pluck('business_id');
            // if($related_table->count() == 0) { 
                $whyProgram = WhyProgram::findOrFail($request->id);
                if (!$whyProgram) {
                    session()->flash('error');
                    return redirect()->back();
                }
                Storage::disk('attachments')->delete('whyProgram/' . $whyProgram->photo);
                $whyProgram->delete();
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
                    $whyProgram = WhyProgram::whereIn('id', $delete_selected_id)->get();
                    foreach($whyProgram as $item) {
                        Storage::disk('attachments')->delete('whyProgram/' . $item->photo);
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
