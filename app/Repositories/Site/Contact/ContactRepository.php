<?php

namespace App\Repositories\Site\Contact;

use App\Models\CompanyInformation;
use App\Models\Service;
use App\Models\Message;

class ContactRepository implements ContactInterface 
{
    public function index($request)
    {
        $companyInformaion = CompanyInformation::first();
        $services          = Service::get(['id','first_title_ar','first_title_en']);
        return view('site.contact',compact('companyInformaion','services'));
    }



    public function store($request)
    {
        try {
            $validated = $request->validated();
            $inputs    = $request->all();
            //insert data
            $message = Message::create($inputs);
            if (!$message) {
                session()->flash('error');
                return redirect()->back();
            }
            session()->flash('success');
            return redirect()->back();
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }
}
