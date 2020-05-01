<?php 

namespace App\Http\Controllers;

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
     * @param  \Illuminate\Http\Request  $request
     * @return mixed
     */
    public function offerAction(Request $request) {
        if ($request->method() === "POST"){
            $data = array();

            $firstname = $request->input('firstname');
            $lastname = $request->input('lastname');
            $email = $request->input('email');
            $telnumber = $request->input('telnumber');
            $msg = $request->input('msg');

            if (! is_int($telnumber)) {
                dd('érror worng number');
            }
            
            $data = [
                'firstname' => $firstname,
                'lastname' => $lastname,
                'email' => $email,
                'telnumber' => $telnumber,
                'msg' => $msg
            ];

            dump($data);
        }
    }

    public function contactView() {
        return view('contact');
    }
}