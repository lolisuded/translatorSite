<?php 

namespace App\Http\Controllers;

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

    public function contactView() {
        return view('contact');
    }
}