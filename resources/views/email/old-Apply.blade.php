@component('mail::message')
 Bonjour M./Mme {{$data['candidat']}} , votre candidature au poste {{$data['poste']}} a été enregistrée avec succès.

The body of your message.

@component('mail::button')
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent