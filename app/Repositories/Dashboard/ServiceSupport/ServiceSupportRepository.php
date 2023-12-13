<?php

namespace App\Repositories\Dashboard\ServiceSupport;

use App\Models\ServiceSupport;
use App\Models\Service;
use App\Traits\ImageTrait;
use Illuminate\Support\Facades\Storage;

class ServiceSupportRepository implements ServiceSupportInterface 
{
    use ImageTrait;

    public function index($request)
    {
        $data = ServiceSupport::
        when($request->title != null,function ($q) use($request){
            return $q->where('title_ar','like','%'.$request->title.'%');
        })
        ->when($request->title != null,function ($q) use($request){
            return $q->where('title_en','like','%'.$request->title_en.'%');
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
        
        $services = $this->getServices();
        
        return view('dashboard.serviceSupport.index',compact('data','services'))
        ->with([
            'title'      => $request->title,
            'content'    => $request->content,
            'service_id' => $request->service_id,
            'from_date'  => $request->from_date,
            'to_date'    => $request->to_date,
        ]);
    }



    public function show($id)
    {
        $serviceSupport = ServiceSupport::findOrFail($id);

        return view('dashboard.serviceSupport.show', compact('serviceSupport'));
    }



    public function store($request)
    {
        try {
            $validated         = $request->validated();
            $inputs            = $request->all();
            //upload image
            if ($request->photo) {
                $photo_name      = $this->uploadImage($request->photo, 'attachments/serviceSupport');
                $inputs['photo'] = $photo_name;
            }
            //insert data
            $serviceSupport = ServiceSupport::create($inputs);
            if (!$serviceSupport) {
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
            $serviceSupport  = ServiceSupport::findOrFail($request->id);
            if (!$serviceSupport) {
                session()->flash('error');
                return redirect()->back();
            }
            //upload image
            if ($request->photo) {
                //remove old photo
                Storage::disk('attachments')->delete('serviceSupport/' . $serviceSupport->photo);
                $photo_name = $this->uploadImage($request->photo, 'attachments/serviceSupport');
                $inputs['photo'] = $photo_name;
            } else {
                $inputs['photo'] = $serviceSupport->photo;
            }
            $serviceSupport->update($inputs);
            if (!$serviceSupport) {
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
                $serviceSupport = ServiceSupport::findOrFail($request->id);
                if (!$serviceSupport) {
                    session()->flash('error');
                    return redirect()->back();
                }
                Storage::disk('attachments')->delete('serviceSupport/' . $serviceSupport->photo);
                $serviceSupport->delete();
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
                    $serviceSupports = ServiceSupport::whereIn('id', $delete_selected_id)->get();
                    foreach($serviceSupports as $serviceSupport) {
                        Storage::disk('attachments')->delete('serviceSupport/' . $serviceSupport->photo);
                        $serviceSupport->delete();
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
