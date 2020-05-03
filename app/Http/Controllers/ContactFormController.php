<?php

namespace App\Http\Controllers;

use App\Mail\ContactFormMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

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
        ]);
        // Sends the E-mail

        Mail::to('test@test.com')->send(new ContactFormMail($data));
    }
    
}
