<?php

namespace App\Repositories\Dashboard\Message;

use App\Models\Message;
use App\Models\Service;

class MessageRepository implements MessageInterface 
{

    public function index($request)
    {
        $data = Message::
        when($request->name != null,function ($q) use($request){
            return $q->where('name','like','%'.$request->name.'%');
        })
        ->when($request->email != null,function ($q) use($request){
            return $q->where('email','like','%'.$request->email.'%');
        })
        ->when($request->phone != null,function ($q) use($request){
            return $q->where('phone','like','%'.$request->phone.'%');
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

        $services = Service::get(['id','first_title_ar','first_title_en']);

        return view('dashboard.message.index',compact('data','services'))
        ->with([
            'name'        => $request->name,
            'email'       => $request->email,
            'phone'       => $request->phone,
            'service_id'  => $request->service_id,
            'from_date'   => $request->from_date,
            'to_date'     => $request->to_date,
        ]);
    }



    public function destroy($request)
    {
        try {
            // $related_table = realed_model::where('business_id', $request->id)->pluck('business_id');
            // if($related_table->count() == 0) { 
                $message = Message::findOrFail($request->id);
                if (!$message) {
                    session()->flash('error');
                    return redirect()->back();
                }
                $message->delete();
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
                    $messages = Message::whereIn('id', $delete_selected_id)->get();
                    foreach($messages as $message) {
                        $message->delete();
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
