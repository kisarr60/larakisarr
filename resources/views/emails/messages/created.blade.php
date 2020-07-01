@component('mail::message')
# {{$name}} a écrit :

{{$msg}}.

@component('mail::button', ['url' => '', 'color' => 'success'])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
