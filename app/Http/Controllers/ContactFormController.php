<?php

namespace App\Http\Controllers;

use App\Mail\ContactFormMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Rules\ValidRecaptcha;

class ContactFormController extends Controller
{
    public function create()
    {
        return view('Contact.create');
    }

    public function contactMail()
    {
        $data = request()->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required',
            'msg' => 'required', 
            'g-recaptcha-response' => ['required', new ValidRecaptcha()]
        ]);
        
        // Sends the E-mail

        Mail::to('test@test.com')->send(new ContactFormMail($data));
        
        // Redirects to Contact with Success message

        return back()->with('success','Bericht Succesvol Verstuurd!');
    }
    
}
