<?php

namespace App\Repositories\Dashboard\ProgramManage;

use App\Models\ProgramManage;
use App\Models\Program;
use App\Traits\ImageTrait;
use Illuminate\Support\Facades\Storage;

class ProgramManageRepository implements ProgramManageInterface 
{
    use ImageTrait;

    public function index($request)
    {
        $data = ProgramManage::
        when($request->title != null,function ($q) use($request){
            return $q->where('title_ar','like','%'.$request->title.'%');
        })
        ->when($request->title != null,function ($q) use($request){
            return $q->where('title_en','like','%'.$request->title.'%');
        })
        ->when($request->program_id != null,function ($q) use($request){
            return $q->where('program_id','like','%'.$request->program_id.'%');
        })
        ->when($request->from_date != null,function ($q) use($request){
            return $q->whereDate('created_at','>=',$request->from_date);
        })
        ->when($request->to_date != null,function ($q) use($request){
            return $q->whereDate('created_at','<=',$request->to_date);
        })
        ->paginate(config('myConfig.paginationCount'));

        $programs = $this->getPrograms();

        return view('dashboard.programManage.index',compact('data','programs'))
        ->with([
            'title'      => $request->title,
            'program_id' => $request->program_id,
            'from_date'  => $request->from_date,
            'to_date'    => $request->to_date,
        ]);
    }



    public function show($id)
    {
        $programManage = ProgramManage::findOrFail($id);

        return view('dashboard.programManage.show', compact('programManage'));
    }



    public function store($request)
    {
        try {
            $validated = $request->validated();
            $inputs    = $request->all();
            //upload image
            if ($request->photo) {
                $photo_name      = $this->uploadImage($request->photo, 'attachments/programManage');
                $inputs['photo'] = $photo_name;
            }
            //insert data
            $programManage = ProgramManage::create($inputs);
            if (!$programManage) {
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
            $validated      = $request->validated();
            $inputs         = $request->all();
            $programManage = ProgramManage::findOrFail($request->id);
            if (!$programManage) {
                session()->flash('error');
                return redirect()->back();
            }
            //upload image
            if ($request->photo) {
                //remove old photo
                Storage::disk('attachments')->delete('programManage/' . $programManage->photo);
                $photo_name = $this->uploadImage($request->photo, 'attachments/programManage');
                $inputs['photo'] = $photo_name;
            } else {
                $inputs['photo'] = $programManage->photo;
            }
            $programManage->update($inputs);
            if (!$programManage) {
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
                $programManage = ProgramManage::findOrFail($request->id);
                if (!$programManage) {
                    session()->flash('error');
                    return redirect()->back();
                }
                Storage::disk('attachments')->delete('programManage/' . $programManage->photo);
                $programManage->delete();
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
                    $programManages = ProgramManage::whereIn('id', $delete_selected_id)->get();
                    foreach($programManages as $programManage) {
                        Storage::disk('attachments')->delete('programManage/' . $programManage->photo);
                        $programManage->delete();
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



    public function getPrograms()
    {
        $programs = Program::get();
        return $programs;
    }
}
