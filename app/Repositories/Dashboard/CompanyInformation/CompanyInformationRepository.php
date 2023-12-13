<?php

namespace App\Repositories\Dashboard\CompanyInformation;

use App\Traits\ImageTrait;
use App\Models\CompanyInformation;
use Illuminate\Support\Facades\Storage;

class CompanyInformationRepository implements CompanyInformationInterface 
{
    use ImageTrait;

    public function index($request)
    {
        $data = CompanyInformation::
        when($request->brief != null,function ($q) use($request){
            return $q->where('brief','like','%'.$request->brief.'%');
        })
        ->when($request->address != null,function ($q) use($request){
            return $q->where('address','like','%'.$request->address.'%');
        })
        ->when($request->email != null,function ($q) use($request){
            return $q->where('email','like','%'.$request->email.'%');
        })
        ->when($request->phone != null,function ($q) use($request){
            return $q->where('phone','like','%'.$request->phone.'%');
        })
        ->when($request->whatsapp != null,function ($q) use($request){
            return $q->where('whatsapp','like','%'.$request->whatsapp.'%');
        })
        ->when($request->twitter != null,function ($q) use($request){
            return $q->where('twitter','like','%'.$request->twitter.'%');
        })
        ->when($request->facebook != null,function ($q) use($request){
            return $q->where('facebook','like','%'.$request->facebook.'%');
        })
        ->when($request->youtube != null,function ($q) use($request){
            return $q->where('youtube','like','%'.$request->youtube.'%');
        })
        ->when($request->instagram != null,function ($q) use($request){
            return $q->where('instagram','like','%'.$request->instagram.'%');
        })
        ->when($request->linkedin != null,function ($q) use($request){
            return $q->where('linkedin','like','%'.$request->linkedin.'%');
        })
        ->when($request->snapchat != null,function ($q) use($request){
            return $q->where('snapchat','like','%'.$request->snapchat.'%');
        })
        ->when($request->from_date != null,function ($q) use($request){
            return $q->whereDate('created_at','>=',$request->from_date);
        })
        ->when($request->to_date != null,function ($q) use($request){
            return $q->whereDate('created_at','<=',$request->to_date);
        })
        ->paginate(config('myConfig.paginationCount'));

        return view('dashboard.companyInformation.index',compact('data'))
        ->with([
            'brief'      => $request->brief,
            'address'    => $request->address,
            'email'      => $request->email,
            'phone'      => $request->phone,
            'whatsapp'   => $request->whatsapp,
            'twitter'    => $request->twitter,
            'facebook'   => $request->facebook,
            'youtube'    => $request->youtube,
            'instagram'  => $request->instagram,
            'linkedin'   => $request->linkedin,
            'snapchat'   => $request->snapchat,
            'googleplay' => $request->googleplay,
            'appstore'   => $request->appstore,
            'from_date'  => $request->from_date,
            'to_date'    => $request->to_date,
        ]);
    }



    public function store($request)
    {
        try {
            $validated = $request->validated();
            $inputs    = $request->all();
            //upload image
            if ($request->photo) {
                $photo_name      = $this->uploadImage($request->photo, 'attachments/companyInformation');
                $inputs['photo'] = $photo_name;
            }
            //insert data
            $companyInformation = CompanyInformation::create($inputs);
            if (!$companyInformation) {
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
            $companyInformation  = CompanyInformation::findOrFail($request->id);
            if (!$companyInformation) {
                session()->flash('error');
                return redirect()->back();
            }
            //upload image
            if ($request->photo) {
                //remove old photo
                Storage::disk('attachments')->delete('companyInformation/' . $companyInformation->photo);
                $photo_name = $this->uploadImage($request->photo, 'attachments/companyInformation');
                $inputs['photo'] = $photo_name;
            } else {
                $inputs['photo'] = $companyInformation->photo;
            }
            $companyInformation->update($inputs);
            if (!$companyInformation) {
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
                $companyInformation = CompanyInformation::findOrFail($request->id);
                if (!$companyInformation) {
                    session()->flash('error');
                    return redirect()->back();
                }
                Storage::disk('attachments')->delete('companyInformation/' . $companyInformation->photo);
                $companyInformation->delete();
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
                    $companyInformations = CompanyInformation::whereIn('id', $delete_selected_id);
                    foreach($companyInformations as $companyInformation) {
                        Storage::disk('attachments')->delete('companyInformation/' . $companyInformation->photo);
                        $companyInformation->delete();
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
