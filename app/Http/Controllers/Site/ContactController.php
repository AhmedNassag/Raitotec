<?php

namespace App\Http\Controllers\Site;

use App\Repositories\Site\Contact\ContactInterface;
use App\Http\Requests\Site\Contact\StoreContactRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    protected $contact;

    public function __construct(ContactInterface $contact)
    {
        $this->contact = $contact;
    }



    public function index(Request $request)
    {
        return $this->contact->index($request);
    }



    public function store(StoreContactRequest $request)
    {
        return $this->contact->store($request);
    }
}
