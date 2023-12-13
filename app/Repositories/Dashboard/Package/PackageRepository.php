<?php

namespace App\Repositories\Dashboard\Package;

use App\Models\Package;
use Illuminate\Support\Facades\Storage;

class PackageRepository implements PackageInterface 
{

    public function index($request)
    {
        $data = Package::
        when($request->name != null,function ($q) use($request){
            return $q->where('name_ar','like','%'.$request->name.'%');
        })
        ->when($request->name != null,function ($q) use($request){
            return $q->where('name_en','like','%'.$request->name.'%');
        })
        ->when($request->price != null,function ($q) use($request){
            return $q->where('price','like','%'.$request->price.'%');
        })
        ->when($request->discount != null,function ($q) use($request){
            return $q->where('discount','like','%'.$request->discount.'%');
        })
        ->when($request->from_date != null,function ($q) use($request){
            return $q->whereDate('created_at','>=',$request->from_date);
        })
        ->when($request->to_date != null,function ($q) use($request){
            return $q->whereDate('created_at','<=',$request->to_date);
        })
        ->paginate(config('myConfig.paginationCount'));
        return view('dashboard.package.index',compact('data'))
        ->with([
            'name'      => $request->name,
            'price'     => $request->price,
            'discount'  => $request->discount,
            'from_date' => $request->from_date,
            'to_date'   => $request->to_date,
        ]);
    }



    public function show($id)
    {
        $package = Package::findOrFail($id);

        return view('dashboard.package.show', compact('package'));
    }



    public function store($request)
    {
        try {
            $validated = $request->validated();
            $inputs    = $request->all();
            //insert data
            $package = Package::create($inputs);
            if (!$package) {
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
            $package   = Package::findOrFail($request->id);
            if (!$package) {
                session()->flash('error');
                return redirect()->back();
            }
            $package->update($inputs);
            if (!$package) {
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
                $package = Package::findOrFail($request->id);
                if (!$package) {
                    session()->flash('error');
                    return redirect()->back();
                }
                $package->delete();
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
                    $packages = Package::whereIn('id', $delete_selected_id)->get();
                    foreach($packages as $item) {
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
