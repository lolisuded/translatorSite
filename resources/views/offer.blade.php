@extends('base.base')
@section('body')

<h1>Offerte</h1>
@if ($errors->any())
    <div class="alert alert-danger" role="alert">
        <p>There was a problem sending your message. Errors have been highlighted below.</p>
    </div>
@endif

<form method="POST" action="/offer/post">
    @csrf
    <div class="ml-2 form-row">
        <div class="col-md-3 mb-3">
            <label class="sr-only" for="firstname">Voornaam</label>
            <div class="input-group {{$errors->has('firstname') ? 'alert alert-danger' : '' }}">
                <div class="input-group-prepend">
                    <div class="input-group-text">Voornaam</div>
                </div>
                <input type="text" class="form-control" id="firstname" placeholder="" name="firstname" required>
            </div>
        </div>

        <div class="col-md-3 mb-3">
            <label class="sr-only" for="lastname">Achternaam</label>
            <div class="input-group {{$errors->has('lastname') ? 'alert alert-danger' : '' }}">
                <div class="input-group-prepend">
                    <div class="input-group-text">Achternaam</div>
                </div>
                <input type="text" class="form-control" id="lastname" placeholder="" name="lastname" required>
            </div>
        </div>
    </div>

    <div class="form-group col-md-4">
        <label class="sr-only" for="email">E-mail</label>
        <div class="input-group {{$errors->has('email') ? 'alert alert-danger' : '' }}">
            <div class="input-group-prepend">
                <div class="input-group-text">E-mail</div>
            </div>
            <input type="email" class="form-control" id="email" placeholder="" name="email" required>
        </div>
    </div>

    <div class="form-group col-md-4">
        <div class="input-group {{$errors->has('telnumber') ? 'alert alert-danger' : '' }}">
            <label class="sr-only" for="telnumber">Telefoonummer</label>
            <div class="input-group-prepend">
                <div class="input-group-text">Telefoonummer</div>
            </div>
            <input type="text" class="form-control" id="telnumber" placeholder="" name="telnumber" required>
        </div>
    </div>

    <div class="mt-5 form-group col-md-4 {{$errors->has('msg') ? 'alert alert-danger' : '' }}">
        <label class="text-white" for="msg">Uw bericht!</label>
        <textarea class="form-control form-control-lg" id="msg" placeholder="" name="msg" required></textarea>
    </div>

    <div class="form-group">
        <div class="ml-3 g-recaptcha{{ $errors->has('g-recaptcha-response') ? 'alert alert-danger' : '' }}"
             data-sitekey="{{ env('GOOGLE_RECAPTCHA_SITE_KEY') }}">
        </div>
        <small class="ml-3 {{$errors->has('g-recaptcha-response') ? 'alert alert-danger' : '' }}" role="alert">{{ $errors->first('g-recaptcha-response') }}</small>
    </div>
    <button type="submit" class="ml-3 btn btn-primary text-white">Verstuur</button>
</form>
@endsection
