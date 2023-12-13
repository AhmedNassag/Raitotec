<?php

namespace App\Repositories\Dashboard\ProgramAbility;

use App\Models\ProgramAbility;
use App\Models\Program;
use App\Traits\ImageTrait;
use Illuminate\Support\Facades\Storage;

class ProgramAbilityRepository implements ProgramAbilityInterface 
{
    use ImageTrait;

    public function index($request)
    {
        $data = ProgramAbility::
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

        return view('dashboard.programAbility.index',compact('data','programs'))
        ->with([
            'title'      => $request->title,
            'content'    => $request->content,
            'program_id' => $request->program_id,
            'from_date'  => $request->from_date,
            'to_date'    => $request->to_date,
        ]);
    }



    public function show($id)
    {
        $programAbility = ProgramAbility::findOrFail($id);

        return view('dashboard.programAbility.show', compact('programAbility'));
    }



    public function store($request)
    {
        try {
            $validated = $request->validated();
            $inputs    = $request->all();
            //upload image
            if ($request->photo) {
                $photo_name      = $this->uploadImage($request->photo, 'attachments/programAbility');
                $inputs['photo'] = $photo_name;
            }
            //insert data
            $programAbility = ProgramAbility::create($inputs);
            if (!$programAbility) {
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
            $programAbility = ProgramAbility::findOrFail($request->id);
            if (!$programAbility) {
                session()->flash('error');
                return redirect()->back();
            }
            //upload image
            if ($request->photo) {
                //remove old photo
                Storage::disk('attachments')->delete('programAbility/' . $programAbility->photo);
                $photo_name = $this->uploadImage($request->photo, 'attachments/programAbility');
                $inputs['photo'] = $photo_name;
            } else {
                $inputs['photo'] = $programAbility->photo;
            }
            $programAbility->update($inputs);
            if (!$programAbility) {
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
                $programAbility = ProgramAbility::findOrFail($request->id);
                if (!$programAbility) {
                    session()->flash('error');
                    return redirect()->back();
                }
                Storage::disk('attachments')->delete('programAbility/' . $programAbility->photo);
                $programAbility->delete();
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
                    $programAbilities = ProgramAbility::whereIn('id', $delete_selected_id)->get();
                    foreach($programAbilities as $programAbility) {
                        Storage::disk('attachments')->delete('programAbility/' . $programAbility->photo);
                        $programAbility->delete();
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
