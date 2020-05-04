@extends('base.base')
@section('body') 

<h1 class="ContactTitle" data-aos="zoom-in" data-aos-duration="2000">Contact</h1>

@if ($errors->any())
    <div class="ErrorContactForm alert alert-danger alert-dismissible fade show" data-aos="fade-left" data-aos-duration="2000" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
    </button>
        <p>Please complete the CAPTCHA.</p>
    </div>
@endif

<div class="ContactForm" data-aos="fade-left" data-aos-duration="2000">
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
            <div class="g-recaptcha" 
                data-sitekey="{{ env('GOOGLE_RECAPTCHA_SITE_KEY') }}">
            </div>
        </div>
        @csrf
        <div class="Contactform_submit form-group">
            <button type="submit" name="submitcontact_form" class="btn btn-primary text-white">Verstuur</a></button>
        </div>
    </form>
</div>

@endsection