@component('mail::message')
# Welcome to RS4IT

We sending this email to you to complete your Saudi VIAS entry and travel requirement
Please click on link below 

@component('mail::button', ['url' => 'http://rs4it.com?email='.$details['email']])
complate
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
