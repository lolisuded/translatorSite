@extends('base.base')
@section('body')

@if ($errors->has('g-recaptcha-response'))
<div class="alert alert-danger alert-block" data-aos="fade-down" data-aos-duration="2000">
	<button type="button" class="close" data-dismiss="alert">×</button>
        <strong>Please Complete The CAPTCHA.</strong>
</div>
@endif

<h1 class="OfferTitle" data-aos="zoom-in" data-aos-duration="2000">Offerte</h1>

<form class="OfferForm" method="POST" action="/offer/post" data-aos="zoom-in" data-aos-duration="2000">
    @csrf
    <div class="ml-2 form-row">
        <div class="col-md-3 mb-3">
            <label class="sr-only" for="firstname">Voornaam</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text">Voornaam</div>
                </div>
                <input type="text" class="form-control" id="firstname" placeholder="" name="firstname" required>
            </div>
        </div>

        <div class="col-md-3 mb-3">
            <label class="sr-only" for="lastname">Achternaam</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text">Achternaam</div>
                </div>
                <input type="text" class="form-control" id="lastname" placeholder="" name="lastname" required>
            </div>
        </div>
    </div>

    <div class="form-group col-md-4">
        <label class="sr-only" for="email">E-mail</label>
        <div class="input-group">
            <div class="input-group-prepend">
                <div class="input-group-text">E-mail</div>
            </div>
            <input type="email" class="form-control" id="email" placeholder="" name="email" required>
        </div>
    </div>

    <div class="form-group col-md-4">
        <label class="sr-only" for="telnumber">Telefoonummer</label>
        <div class="input-group">
            <div class="input-group-prepend">
                <div class="input-group-text">Telefoonummer</div>
            </div>
            <input type="text" class="form-control" id="telnumber" placeholder="" name="telnumber" required>
        </div>
    </div>

    <div class="ml-2 form-row">
        <div class="col-md-3 mb-3">
            <label class="sr-only" for="service">Dienst</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text">Dienst</div>
                </div>
                <select class="form-control" id="service" name="service[]" required>
                    <option value="1">Vertalen</option>
                    <option value="2">Tolk</option>
                </select>
            </div>
        </div>
        <div class="col-md-3 mb-3">
            <label class="sr-only" for="language">Taal</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text">Taal</div>
                </div>
                <select class="form-control" id="language" name="language[]" required>
                    <option value="1">Nederlands > Engels</option>
                    <option value="2">Engels > Nederlands</option>
                    <option value="3">Nederlands > Arabisch</option>
                    <option value="4">Arabisch > Nederlands</option>
                </select>
            </div>
        </div>
    </div>

    <div class="mt-5 form-group col-md-4">
        <label class="text-white" for="msg">Uw bericht!</label>
        <textarea class="form-control form-control-lg" id="msg" placeholder="" name="msg" required></textarea>
    </div>

    <div class="form-group">
        <div class="ml-3 g-recaptcha"
             data-sitekey="{{ env('GOOGLE_RECAPTCHA_SITE_KEY') }}">
        </div>
    </div>
    <button type="submit" class="ml-3 btn btn-primary text-white">Verstuur</button>
</form>
@endsection
