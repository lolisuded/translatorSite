<?php

namespace App\Http\Controllers;

use App\Offer;
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
        if ($request->isMethod('post')){
            $validatedData = $request->validate([
                'firstname' => 'required|max:255',
                'lastname' => 'required|max:255',
                'email' => 'required|email',
                'telnumber' => 'required|numeric',
                'service' => 'required',
                'language' => 'required',
                'msg' => 'required',
                'g-recaptcha-response' => ['required', 'string', new ValidRecaptcha]
            ]);

            if ($validatedData) {
                $offer = new Offer();
                $offer->setFirstname($validatedData['firstname']);
                $offer->setLastname($validatedData['lastname']);
                $offer->setEmail($validatedData['email']);
                $offer->setTelnumber($validatedData['telnumber']);
                $offer->setService($validatedData['service'][0]);
                $offer->setLanguage($validatedData['language'][0]);
                $offer->setMsg($validatedData['msg']);

                $offer->save();
            }
        }

        // Redirects back with Success message.
        return back()->with('success','Bericht Succesvol Verstuurd!');
    }

    public function contactView() {
        return view('contact');
    }
}
