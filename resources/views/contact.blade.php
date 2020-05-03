@extends('base.base')
@section('body') 

<h1>Contact</h1>

<form method="POST" action="/contact">
    <input type="text" placeholder="Voornaam" name="firstname" required>
    <input type="text" placeholder="Achternaam" name="lastname" required>
    <input type="email" placeholder="E-mail" name="email" required>
    <textarea placeholder="Uw bericht!" name="msg" required></textarea>

    @csrf

    <button type="submit" class="btn btn-primary text-white">Verstuur</a>
</form>

@endsection