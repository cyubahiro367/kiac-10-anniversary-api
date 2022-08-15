@component('mail::message')
Registerd to attend the evend


HI

First Name: {{ $firstName}} <br>
Last Name: {{ $lastName }} <br>
Email: {{ $email }} <br>
Organisation: {{ $organisation}} <br>
Job Title: {{ $jobTitle }} <br>
Company Address: {{ $companyAddress }} <br>
Phone Number: {{ $phoneNumber}} <br>
Country: {{ $country }} <br>


Thanks,<br>
{{ config('app.name') }}
@endcomponent
