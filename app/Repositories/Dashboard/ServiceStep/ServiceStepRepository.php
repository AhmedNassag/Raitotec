<?php

namespace App\Repositories\Dashboard\ServiceStep;

use App\Models\ServiceStep;
use App\Models\Service;
use App\Traits\ImageTrait;
use Illuminate\Step\Facades\Storage;

class ServiceStepRepository implements ServiceStepInterface 
{
    use ImageTrait;

    public function index($request)
    {
        $data = ServiceStep::
        when($request->content != null,function ($q) use($request){
            return $q->where('content_ar','like','%'.$request->content.'%');
        })
        ->when($request->content != null,function ($q) use($request){
            return $q->where('content_en','like','%'.$request->content.'%');
        })
        ->when($request->service_id != null,function ($q) use($request){
            return $q->where('service_id','like','%'.$request->service_id.'%');
        })
        ->when($request->from_date != null,function ($q) use($request){
            return $q->whereDate('created_at','>=',$request->from_date);
        })
        ->when($request->to_date != null,function ($q) use($request){
            return $q->whereDate('created_at','<=',$request->to_date);
        })
        ->paginate(config('myConfig.paginationCount'));

        $services = $this->getServices();

        return view('dashboard.serviceStep.index',compact('data','services'))
        ->with([
            'content'   => $request->content,
            'service_id' => $request->service_id,
            'from_date' => $request->from_date,
            'to_date'   => $request->to_date,
        ]);
    }



    public function show($id)
    {
        $serviceStep = ServiceStep::findOrFail($id);

        return view('dashboard.serviceStep.show', compact('serviceStep'));
    }



    public function store($request)
    {
        try {
            $validated         = $request->validated();
            $inputs            = $request->all();
            //upload image
            if ($request->photo) {
                $photo_name      = $this->uploadImage($request->photo, 'attachments/serviceStep');
                $inputs['photo'] = $photo_name;
            }
            //insert data
            $serviceStep = ServiceStep::create($inputs);
            if (!$serviceStep) {
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
            $serviceStep  = ServiceStep::findOrFail($request->id);
            if (!$serviceStep) {
                session()->flash('error');
                return redirect()->back();
            }
            //upload image
            if ($request->photo) {
                //remove old photo
                Storage::disk('attachments')->delete('serviceStep/' . $serviceStep->photo);
                $photo_name = $this->uploadImage($request->photo, 'attachments/serviceStep');
                $inputs['photo'] = $photo_name;
            } else {
                $inputs['photo'] = $serviceStep->photo;
            }
            $serviceStep->update($inputs);
            if (!$serviceStep) {
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
                $serviceStep = ServiceStep::findOrFail($request->id);
                if (!$serviceStep) {
                    session()->flash('error');
                    return redirect()->back();
                }
                Storage::disk('attachments')->delete('serviceStep/' . $serviceStep->photo);
                $serviceStep->delete();
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
                    $serviceSteps = ServiceStep::whereIn('id', $delete_selected_id)->get();
                    foreach($serviceSteps as $serviceStep) {
                        Storage::disk('attachments')->delete('serviceStep/' . $serviceStep->photo);
                        $serviceStep->delete();
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



    public function getServices()
    {
        $services = Service::get();
        return $services;
    }
}
