@component('mail::message')
# Bedankt voor uw bericht!

Wij zullen hier zo snel mogelijk op reageren.


<strong>Voornaam:</strong> {{ $data['firstname'] }}
<strong>Achternaam:</strong> {{ $data['lastname'] }}

<strong>E-mail:</strong> {{ $data['email'] }}

<strong>Bericht:</strong> 

{{ $data['msg'] }}

@component('mail::button', ['url' => 'mamasite.nl'])
Terug naar Website!
@endcomponent

Bedankt!,<br>
Talk
@endcomponent
