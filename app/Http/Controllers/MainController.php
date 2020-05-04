<?php

namespace App\Http\Controllers;

use App\Rules\ValidRecaptcha;
use Illuminate\Http\Request;

class MainController extends Controller {

    public function homeView() {
        return view('home');
    }

    public function aboutView() {
        return view('about');
    }

    public function offerView() {
        return view('offer');
    }


    /**
     * Handle an incoming request.
     *
     * @param Request $request
     * @return mixed
     */
    public function offerAction(Request $request) {
        if ($request->method() === "POST"){
            $validateData = $request->validate([
                'firstname' => 'required|max:255',
                'lastname' => 'required|max:255',
                'email' => 'required|email',
                'telnumber' => 'required|numeric',
                'service' => 'required',
                'language' => 'required',
                'msg' => 'required',
                'g-recaptcha-response' => ['required', new ValidRecaptcha()]
            ]);

            dd($validateData);
        }
        die();
        // Redirects back with Success message.
        return back()->with('success','Bericht Succesvol Verstuurd!');
    }


    public function contactView() {
        return view('contact');
    }
}
