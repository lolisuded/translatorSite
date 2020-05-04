@extends('base.base')
@section('body') 

@if ($errors->has('g-recaptcha-response'))
<div class="alert alert-danger alert-block" data-aos="fade-down" data-aos-duration="2000">
	<button type="button" class="close" data-dismiss="alert">×</button>	
        <strong>Please Complete The CAPTCHA.</strong>
</div>
@endif

<h1 class="ContactTitle" data-aos="zoom-in" data-aos-duration="2000">Contact</h1>

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

<iframe class="GoogleMapsLocation" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2448.4018800853337!2d5.011365815942726!3d52.145200771689375!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c671bf63154f81%3A0xb96dbfc0ffc6e2d7!2sTolk-%20en%20vertaalbureau%20TALK!5e0!3m2!1snl!2snl!4v1588633084790!5m2!1snl!2snl"></iframe>

@endsection