<?php

namespace App\Repositories\Dashboard\Sale;

use App\Models\Sale;
use App\Traits\ImageTrait;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Validator;

class SaleRepository implements SaleInterface 
{
    use ImageTrait;

    public function index($request)
    {
        $data = Sale::
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

        return view('dashboard.sale.index',compact('data'))
        ->with([
            'first_title'  => $request->first_title,
            // 'second_title' => $request->second_title,
            'from_date'    => $request->from_date,
            'to_date'      => $request->to_date,
        ]);
    }



    public function show($id)
    {
        $sale = Sale::findOrFail($id);

        return view('dashboard.sale.show', compact('sale'));
    }



    public function store($request)
    {
        try {
            $validated         = $request->validated();
            $inputs            = $request->all();
            //upload image
            if ($request->photo) {
                $photo_name      = $this->uploadImage($request->photo, 'attachments/sale');
                $inputs['photo'] = $photo_name;
            }
            //insert data
            $sale = Sale::create($inputs);
            if (!$sale) {
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
            $sale  = Sale::findOrFail($request->id);
            if (!$sale) {
                session()->flash('error');
                return redirect()->back();
            }
            //upload image
            if ($request->photo) {
                //remove old photo
                Storage::disk('attachments')->delete('sale/' . $sale->photo);
                $photo_name = $this->uploadImage($request->photo, 'attachments/sale');
                $inputs['photo'] = $photo_name;
            } else {
                $inputs['photo'] = $sale->photo;
            }
            $sale->update($inputs);
            if (!$sale) {
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
                $sale = Sale::findOrFail($request->id);
                if (!$sale) {
                    session()->flash('error');
                    return redirect()->back();
                }
                Storage::disk('attachments')->delete('sale/' . $sale->photo);
                $sale->delete();
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
                    $sales = Sale::whereIn('id', $delete_selected_id)->get();
                    foreach($sales as $sale) {
                        Storage::disk('attachments')->delete('sale/' . $sale->photo);
                        $sale->delete();
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
