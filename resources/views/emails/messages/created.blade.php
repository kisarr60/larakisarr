@component('mail::message')
# Message envoyé par :
- Nom : {{$msg->name}}
- Email : {{$msg->email}}

@component('mail::panel')
{{$msg->message}}.
@endcomponent

@component('mail::button', ['url' => '', 'color' => 'success'])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
