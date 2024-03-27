@component('mail::message')
 Bonjour M./Mme {{$data['destinataire']}} , {{$data['your_name']}} vous a transferé une offre d'emploi

The body of your message.

@component('mail::button', ['url' => $data['$jobUrl']])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
