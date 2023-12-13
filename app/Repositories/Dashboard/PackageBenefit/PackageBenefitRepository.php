<?php

namespace App\Repositories\Dashboard\PackageBenefit;

use App\Models\Package;
use App\Models\PackageBenefit;

class PackageBenefitRepository implements PackageBenefitInterface 
{

    public function index($request)
    {
        $data = PackageBenefit::
        when($request->name != null,function ($q) use($request){
            return $q->where('name_ar','like','%'.$request->name.'%');
        })
        ->when($request->name != null,function ($q) use($request){
            return $q->where('name_en','like','%'.$request->name.'%');
        })
        ->when($request->package_id != null,function ($q) use($request){
            return $q->where('package_id','like','%'.$request->package_id.'%');
        })
        ->when($request->from_date != null,function ($q) use($request){
            return $q->whereDate('created_at','>=',$request->from_date);
        })
        ->when($request->to_date != null,function ($q) use($request){
            return $q->whereDate('created_at','<=',$request->to_date);
        })
        ->paginate(config('myConfig.paginationCount'));

        $packages = $this->getPackages();
        
        return view('dashboard.packageBenefit.index',compact('data', 'packages'))
        ->with([
            'name'       => $request->name,
            'package_id' => $request->package_id,
            'from_date'  => $request->from_date,
            'to_date'    => $request->to_date,
        ]);
    }



    public function show($id)
    {
        $packageBenefit = PackageBenefit::findOrFail($id);

        return view('dashboard.packageBenefit.show', compact('packageBenefit'));
    }



    public function store($request)
    {
        try {
            $validated = $request->validated();
            $inputs    = $request->all();
            //insert data
            $packageBenefit = PackageBenefit::create($inputs);
            if (!$packageBenefit) {
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
            $packageBenefit = PackageBenefit::findOrFail($request->id);
            if (!$packageBenefit) {
                session()->flash('error');
                return redirect()->back();
            }
            $packageBenefit->update($inputs);
            if (!$packageBenefit) {
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
                $packageBenefit = PackageBenefit::findOrFail($request->id);
                if (!$packageBenefit) {
                    session()->flash('error');
                    return redirect()->back();
                }
                $packageBenefit->delete();
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
            //     $related_table = realed_model::where('business_id', $selected_id)->pluck('business_id');
            //     if($related_table->count() == 0) {
                    $packageBenefits = PackageBenefit::whereIn('id', $delete_selected_id)->get();
                    foreach($packageBenefits as $item) {
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



    public function getPackages()
    {
        $packages = Package::get();
        return $packages;
    }
}
