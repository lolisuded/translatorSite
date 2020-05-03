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


<h1 class="ContactTitle">Contact</h1>

<div class="ContactForm">
    <form method="POST" action="/contact">
        <div class="Contactform_firstname form-group">
            <label>Voornaam</label>
            <input type="text" class="form-control" name="firstname" required>
        </div>
        <div class="Contactform_lastname form-group">
            <label>Achternaam</label>
            <input type="text" class="form-control" name="lastname" required>
        </div>
        <div class="Contactform_email form-group">
            <label for="exampleInputEmail">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail aria-describedby="emailDisclaimer" name="email" required>
            <small id="emailDisclaimer" class="emailDisclaimer form-text">Wij zullen nooit uw gegevens delen.</small>
        </div>
        <div class="Contactform_msg form-group">
            <label for="exampleInputEmail">Uw Bericht!</label>
            <textarea class="form-control" name="msg" required></textarea>
        </div>
        <div class="Contactform_captcha form-group">
            <div class="g-recaptcha" data-sitekey="6Le86PEUAAAAAFyJoZQth11xw4BFnasS_h0mw0jr" aria-required="true"></div>
        </div>
        @csrf
        <div class="Contactform_submit form-group">
            <button type="submit" name="submitcontact_form" class="btn btn-primary text-white">Verstuur</a></button>
        </div>
    </form>
</div>

@endsection