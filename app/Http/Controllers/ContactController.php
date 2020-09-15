<?php

namespace App\Http\Controllers;

use Zttp\Zttp;
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
        $response = Zttp::asFormParams()
            ->post('https://www.google.com/recaptcha/api/siteverify', [
                'secret' => config('services.recaptcha.secret'),
                'response' => request()->input('g-recaptcha-response'),
                'remoteip' => $_SERVER['REMOTE_ADDR'],
            ]);

        if(! $response->json()['success']) {
            return back()
                ->with('error', 'Error! Recaptcha nije ispunjena.');
        }

        $contact = Contact::create($request->validated());

        // Mail::to('cvijetapanic2@gmail.com')
        //     ->send(new ContactMe($contact));

        return redirect('contact-v1')
            ->with('success', 'Uspjesno ste poslali mejl.');
    }
}
