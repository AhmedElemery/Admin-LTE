@component('mail::message')
# Reset Account Password
Welcome {{ $data['data']->name }}


@component('mail::button', ['url' => aurl('reset/password/'.$data['token'])])
Click Here To Reset Password
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
