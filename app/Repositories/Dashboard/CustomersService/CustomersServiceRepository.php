<?php

namespace App\Repositories\Dashboard\CustomersService;

use App\Models\CustomersService;

class CustomersServiceRepository implements CustomersServiceInterface 
{
    public function index($request)
    {
        return CustomersService::
        when($request->whatsapp != null,function ($q) use($request){
            return $q->where('whatsapp','like','%'.$request->whatsapp.'%');
        })
        ->when($request->phone != null,function ($q) use($request){
            return $q->where('phone','like','%'.$request->phone.'%');
        })
        ->when($request->from_date != null,function ($q) use($request){
            return $q->whereDate('created_at','>=',$request->from_date);
        })
        ->when($request->to_date != null,function ($q) use($request){
            return $q->whereDate('created_at','<=',$request->to_date);
        })
        ->paginate(config('myConfig.paginationCount'));
    }



    public function store($request)
    {
        try {
            $validated = $request->validated();
            
            //insert data
            $customersService = CustomersService::create([
                'whatsapp' => $request->whatsapp,
                'phone'    => $request->phone,
            ]);
            if (!$customersService) {
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
            
            //update data
            $customersService  = CustomersService::findOrFail($request->id);
            if (!$customersService) {
                session()->flash('error');
                return redirect()->back();
            }
            $customersService->update([
                'whatsapp'  => $request->whatsapp,
                'phone' => $request->phone,
            ]);
            if (!$customersService) {
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
                $customersService = CustomersService::findOrFail($request->id);
                if (!$customersService) {
                    session()->flash('error');
                    return redirect()->back();
                }
                $customersService->delete();
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
            //     $related_table = realed_model::where('category_id', $selected_id)->pluck('category_id');
            //     if($related_table->count() == 0) {
                    $customersServices = CustomersService::whereIn('id', $delete_selected_id)->delete();
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
