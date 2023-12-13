<?php

namespace App\Repositories\Dashboard\ProgramPackage;

use App\Models\ProgramPackage;
use App\Models\Program;
use Illuminate\Support\Facades\Storage;

class ProgramPackageRepository implements ProgramPackageInterface 
{

    public function index($request)
    {
        $data = ProgramPackage::
        when($request->title != null,function ($q) use($request){
            return $q->where('title_ar','like','%'.$request->title.'%');
        })
        ->when($request->title != null,function ($q) use($request){
            return $q->where('title_en','like','%'.$request->title.'%');
        })
        ->when($request->monthly_price != null,function ($q) use($request){
            return $q->where('monthly_price','like','%'.$request->monthly_price.'%');
        })
        ->when($request->annually_price != null,function ($q) use($request){
            return $q->where('annually_price','like','%'.$request->annually_price.'%');
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

        return view('dashboard.programPackage.index',compact('data','programs'))
        ->with([
            'title'          => $request->title,
	    'monthly_price'  => $request->monthly_price,
	    'annually_price' => $request->annually_price,
            'program_id'     => $request->program_id,
            'from_date'      => $request->from_date,
            'to_date'    => $request->to_date,
        ]);
    }



    public function show($id)
    {
        $programPackage = ProgramPackage::findOrFail($id);

        return view('dashboard.programPackage.show', compact('programPackage'));
    }



    public function store($request)
    {
        try {
            $validated = $request->validated();
            $inputs    = $request->all();
            //insert data
            $programPackage = ProgramPackage::create($inputs);
            if (!$programPackage) {
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
            $programPackage = ProgramPackage::findOrFail($request->id);
            if (!$programPackage) {
                session()->flash('error');
                return redirect()->back();
            }
            $programPackage->update($inputs);
            if (!$programPackage) {
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
                $programPackage = ProgramPackage::findOrFail($request->id);
                if (!$programPackage) {
                    session()->flash('error');
                    return redirect()->back();
                }
                $programPackage->delete();
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
                    $programPackages = ProgramPackage::whereIn('id', $delete_selected_id)->get();
                    foreach($programPackages as $programPackage) {
                        $programPackage->delete();
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
