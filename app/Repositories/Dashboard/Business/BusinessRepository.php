<?php

namespace App\Repositories\Dashboard\Business;

use App\Models\Business;
use App\Models\BusinessPhoto;
use App\Models\User;
use App\Traits\ImageTrait;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Validator;

class BusinessRepository implements BusinessInterface 
{
    use ImageTrait;

    public function index($request)
    {
        $data = Business::
        when($request->content != null,function ($q) use($request){
            return $q->where('title_ar','like','%'.$request->title.'%');
        })
        ->when($request->content != null,function ($q) use($request){
            return $q->where('title_en','like','%'.$request->title.'%');
        })
        ->when($request->from_date != null,function ($q) use($request){
            return $q->whereDate('created_at','>=',$request->from_date);
        })
        ->when($request->to_date != null,function ($q) use($request){
            return $q->whereDate('created_at','<=',$request->to_date);
        })
        ->paginate(config('myConfig.paginationCount'));
        return view('dashboard.business.index',compact('data'))
        ->with([
            'title'     => $request->title,
            'from_date' => $request->from_date,
            'to_date'   => $request->to_date,
        ]);
    }



    public function show($id)
    {
        $business = Business::findOrFail($id);

        return view('dashboard.business.show', compact('blog'));
    }



    public function store($request)
    {
        try {
            $validated = $request->validated();
            // $inputs    = $request->all();
            //insert data
            $business = Business::create([
                'title_ar' => $request->title_ar,
                'title_en' => $request->title_en,
            ]);
            //upload image
            if ($request->photos) {
                foreach($request->photos as $request->photo)
                {
                    $photo_name = $this->uploadImage($request->photo, 'attachments/business');
                    $businessPhotos = BusinessPhoto::create([
                        'business_id' => $business->id,
                        'photo'       => $photo_name,
                    ]);
                }
            }
            if (!$business) {
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
            $business  = Business::findOrFail($request->id);
            if (!$business) {
                session()->flash('error');
                return redirect()->back();
            }
            $business->update([
                'title_ar' => $request->title_ar,
                'title_en' => $request->title_en,
            ]);
            
            //upload photos
            if ($request->photos) {
                foreach($business->businessPhotos as $businessPhoto)
                {
                    //remove old photos
                    Storage::disk('attachments')->delete('business/' . $businessPhoto->photo);
                    $businessPhoto->delete();
                }
                //upload new photos
                foreach($request->photos as $request->photo)
                {
                    $photo_name = $this->uploadImage($request->photo, 'attachments/business');
                    $businessPhotos = BusinessPhoto::create([
                        'business_id' => $business->id,
                        'photo'       => $photo_name,
                    ]);
                }
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
                $business = Business::findOrFail($request->id);
                if (!$business) {
                    session()->flash('error');
                    return redirect()->back();
                }
                foreach($business->businessPhotos as $businessPhoto)
                {
                    //remove old photos
                    Storage::disk('attachments')->delete('business/' . $businessPhoto->photo);
                    $businessPhoto->delete();
                }
                $business->delete();
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
                    $businesses = Business::whereIn('id', $delete_selected_id)->get();
                    foreach($businesses as $business) 
                    {    
                        foreach($business->businessPhotos as $businessPhoto)
                        {
                            //remove old photos
                            Storage::disk('attachments')->delete('business/' . $businessPhoto->photo);
                            $businessPhoto->delete();
                        }
                        $business->delete();
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

