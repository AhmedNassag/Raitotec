<?php

namespace App\Repositories\Dashboard\Program;

use App\Models\Program;
use App\Traits\ImageTrait;
use Illuminate\Support\Facades\Storage;

class ProgramRepository implements ProgramInterface 
{
    use ImageTrait;

    public function index($request)
    {
        $data = Program::
        when($request->first_title != null,function ($q) use($request){
            return $q->where('first_title','like','%'.$request->first_title.'%');
        })
        // ->when($request->second_title != null,function ($q) use($request){
        //     return $q->where('second_title','like','%'.$request->second_title.'%');
        // })
        ->when($request->from_date != null,function ($q) use($request){
            return $q->whereDate('created_at','>=',$request->from_date);
        })
        ->when($request->to_date != null,function ($q) use($request){
            return $q->whereDate('created_at','<=',$request->to_date);
        })
        ->paginate(config('myConfig.paginationCount'));

        return view('dashboard.program.index',compact('data'))
        ->with([
            'first_title'  => $request->first_title,
            // 'second_title' => $request->second_title,
            'from_date'    => $request->from_date,
            'to_date'      => $request->to_date,
        ]);
    }



    public function show($id)
    {
        $program = Program::findOrFail($id);

        return view('dashboard.program.show', compact('program'));
    }



    public function store($request)
    {
        try {
            $validated         = $request->validated();
            $inputs            = $request->all();
            //upload image
            if ($request->photo) {
                $photo_name      = $this->uploadImage($request->photo, 'attachments/program');
                $inputs['photo'] = $photo_name;
            }
            //add slug
            $inputs['slug_ar'] = str_replace(' ', '-', $request->first_title_ar);
            $inputs['slug_en'] = str_replace(' ', '-', $request->first_title_en);
            //insert data
            $program = Program::create($inputs);
            if (!$program) {
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
            $program  = Program::findOrFail($request->id);
            if (!$program) {
                session()->flash('error');
                return redirect()->back();
            }
            //upload image
            if ($request->photo) {
                //remove old photo
                Storage::disk('attachments')->delete('program/' . $program->photo);
                $photo_name = $this->uploadImage($request->photo, 'attachments/program');
                $inputs['photo'] = $photo_name;
            } else {
                $inputs['photo'] = $program->photo;
            }
            //update slug
            $inputs['slug_ar'] = str_replace(' ', '-', $request->first_title_ar);
            $inputs['slug_en'] = str_replace(' ', '-', $request->first_title_en);
            //update data
            $program->update($inputs);
            if (!$program) {
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
            // $related_table = realed_model::where('category_id', $request->id)->pluck('category_id');
            // if($related_table->count() == 0) { 
                $program = Program::findOrFail($request->id);
                if (!$program) {
                    session()->flash('error');
                    return redirect()->back();
                }
                Storage::disk('attachments')->delete('program/' . $program->photo);
                $program->delete();
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
            //     $related_table = realed_model::where('blog_id', $selected_id)->pluck('blog_id');
            //     if($related_table->count() == 0) {
                    $programs = Program::whereIn('id', $delete_selected_id)->get();
                    foreach($programs as $program) {
                        Storage::disk('attachments')->delete('program/' . $program->photo);
                        $program->delete();
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
