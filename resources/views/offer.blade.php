@extends('base.base')
@section('body') 

<h1>Offerte</h1>
<form method="POST" action="/offer/post">
    @csrf
    <input type="text" placeholder="Voornaam" name="firstname" required>
    <input type="text" placeholder="Achternaam" name="lastname" required>
    <input type="email" placeholder="E-mail" name="email" required>
    <input type="text" placeholder="Telefoonummer" name="telnumber" required>
    <textarea placeholder="Uw bericht!" name="msg" required></textarea>
    <button type="submit" class="btn btn-primary text-white">Verstuur</a>
    
</form>
@endsection