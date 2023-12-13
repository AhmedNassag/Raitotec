<?php

namespace App\Repositories\Dashboard\CustomersReview;

use App\Models\CustomersReview;
use App\Traits\ImageTrait;
use Illuminate\Support\Facades\Storage;

class CustomersReviewRepository implements CustomersReviewInterface 
{
    use ImageTrait;

    public function index($request)
    {
        $data = CustomersReview::
        when($request->user_name != null,function ($q) use($request){
            return $q->where('title_ar','like','%'.$request->user_name.'%');
        })
        ->when($request->user_name != null,function ($q) use($request){
            return $q->where('user_name_en','like','%'.$request->user_name.'%');
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
        return view('dashboard.customersReview.index',compact('data'))
        ->with([
            'user_name' => $request->user_name,
            'content'   => $request->content,
            'from_date' => $request->from_date,
            'to_date'   => $request->to_date,
        ]);
    }



    public function show($id)
    {
        $customersReview =CustomersReview::findOrFail($id);

        return view('dashboard.customersReview.show', compact('customersReview'));
    }



    public function store($request)
    {
        try {
            $validated = $request->validated();
            $inputs    = $request->all();
            //upload image
            if ($request->photo) {
                $photo_name      = $this->uploadImage($request->photo, 'attachments/customersReview');
                $inputs['photo'] = $photo_name;
            }
            //insert data
            $customersReview = CustomersReview::create($inputs);
            if (!$customersReview) {
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
            $validated       = $request->validated();
            $inputs          = $request->all();
            $customersReview = CustomersReview::findOrFail($request->id);
            if (!$customersReview) {
                session()->flash('error');
                return redirect()->back();
            }
            //upload image
            if ($request->photo) {
                //remove old photo
                Storage::disk('attachments')->delete('customersReview/' . $customersReview->photo);
                $photo_name = $this->uploadImage($request->photo, 'attachments/customersReview');
                $inputs['photo'] = $photo_name;
            } else {
                $inputs['photo'] = $customersReview->photo;
            }
            $customersReview->update($inputs);
            if (!$customersReview) {
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
                $customersReview = CustomersReview::findOrFail($request->id);
                if (!$customersReview) {
                    session()->flash('error');
                    return redirect()->back();
                }
                Storage::disk('attachments')->delete('customersReview/' . $customersReview->photo);
                $customersReview->delete();
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
                    $customersReviews = CustomersReview::whereIn('id', $delete_selected_id)->get();
                    foreach($customersReviews as $item) {
                        Storage::disk('attachments')->delete('customersReview/' . $item->photo);
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
