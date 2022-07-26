@component('mail::message')
Registerd to attend the evend

HI theotimecyubahiro@gmail.com, 
my name is {{ $name }} and my email is {{ $email }}
I am reaching out to thank you for schedule this event,
 i want to recond you you that i will be available to attend the event 
{{ config('app.name') }} that will be held on [data] at Kigali Rwanda.

Thanks,<br>
{{ config('app.name') }}
@endcomponent
