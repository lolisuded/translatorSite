@extends('base.base')
@section('body') 

{{-- <?php

    // $private_key = '6Le86PEUAAAAAL9pbBIHM0gGstLNKcJy0xgSpZ6A';
    // $Googleapi_url = 'https://www.google.com/recaptcha/api/siteverify';

    // if(array_key_exists('submitcontact_form',$_POST)) 
    // {
    //     $response_key = $_POST['g-recaptcha-response'];
    //     $reCAPTCHA_response = file_get_contents($Googleapi_url.'?secret='.$private_key.'&response='.$response_key.'&remoteip='.$_SERVER['REMOTE_ADDR']);
    //     $reCAPTCHA_response = json_decode($reCAPTCHA_response);

        

    //     if($reCAPTCHA_response->succes == 1) 
    //     {
    //     }
    //     else 
    //     {
    //         echo 'Please check the CAPTCHA';
    //     }
    // }

?> --}}

<h1>Contact</h1>

<form method="POST" action="/contact">
    <input type="text" placeholder="Voornaam" name="firstname" required>
    <input type="text" placeholder="Achternaam" name="lastname" required>
    <input type="email" placeholder="E-mail" name="email" required>
    <textarea placeholder="Uw bericht!" name="msg" required></textarea>
    <div class="g-recaptcha" data-sitekey="6Le86PEUAAAAAFyJoZQth11xw4BFnasS_h0mw0jr" aria-required="true"></div>
    @csrf
    <button type="submit" name="submitcontact_form" class="btn btn-primary text-white">Verstuur</a>
</form>

@endsection