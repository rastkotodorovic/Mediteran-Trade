<?php

namespace App\Http\Controllers;

use App\Contact;
use App\Mail\ContactMe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\ContactRequest;


class ContactController extends Controller
{
    public function index()
    {
        return view('contact');
    }

    public function store(ContactRequest $request)
    {
        $contact = Contact::create($request->validated());

        Mail::to('cvijetapanic2@gmail.com')
            ->send(new ContactMe($contact));

        return redirect('contact-v1')
            ->with('flash', 'Uspjesno ste poslali mejl.');
    }
}
