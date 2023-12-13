<?php

namespace App\Repositories\Dashboard\ImportantCustomer;

use App\Models\ImportantCustomer;
use App\Traits\ImageTrait;
use Illuminate\Support\Facades\Storage;

class ImportantCustomerRepository implements ImportantCustomerInterface 
{
    use ImageTrait;

    public function index($request)
    {
        $data = ImportantCustomer::
        when($request->from_date != null,function ($q) use($request){
            return $q->whereDate('created_at','>=',$request->from_date);
        })
        ->when($request->to_date != null,function ($q) use($request){
            return $q->whereDate('created_at','<=',$request->to_date);
        })
        ->paginate(config('myConfig.paginationCount'));
        return view('dashboard.importantCustomer.index',compact('data'))
        ->with([
            'from_date' => $request->from_date,
            'to_date'   => $request->to_date,
        ]);
    }



    public function show($id)
    {
        $importantCustomer = ImportantCustomer::findOrFail($id);

        return view('dashboard.importantCustomer.show', compact('importantCustomer'));
    }



    public function store($request)
    {
        try {
            $validated = $request->validated();
            $inputs    = $request->all();
            //upload image
            if ($request->photo) {
                $photo_name      = $this->uploadImage($request->photo, 'attachments/importantCustomer');
                $inputs['photo'] = $photo_name;
            }
            //insert data
            $importantCustomer = ImportantCustomer::create($inputs);
            if (!$importantCustomer) {
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
            $validated         = $request->validated();
            $inputs            = $request->all();
            $importantCustomer = ImportantCustomer::findOrFail($request->id);
            if (!$importantCustomer) {
                session()->flash('error');
                return redirect()->back();
            }
            //upload image
            if ($request->photo) {
                //remove old photo
                Storage::disk('attachments')->delete('importantCustomer/' . $importantCustomer->photo);
                $photo_name = $this->uploadImage($request->photo, 'attachments/importantCustomer');
                $inputs['photo'] = $photo_name;
            } else {
                $inputs['photo'] = $importantCustomer->photo;
            }
            $importantCustomer->update($inputs);
            if (!$importantCustomer) {
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
                $importantCustomer = ImportantCustomer::findOrFail($request->id);
                if (!$importantCustomer) {
                    session()->flash('error');
                    return redirect()->back();
                }
                Storage::disk('attachments')->delete('importantCustomer/' . $importantCustomer->photo);
                $importantCustomer->delete();
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
                    $importantCustomers = ImportantCustomer::whereIn('id', $delete_selected_id)->get();
                    foreach($importantCustomers as $importantCustomer) {
                        Storage::disk('attachments')->delete('importantCustomer/' . $importantCustomer->photo);
                        $importantCustomer->delete();
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
