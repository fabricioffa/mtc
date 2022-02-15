@component('mail::message')
# {{__('Bem-vindo!')}}

{{__('Visite nosso espaço cliente e confira nossos serviços.')}}

@component('mail::button', ['url' => 'https://sms.mytelecom.pt/', 'color' => 'primary'])
{{__('Espaço cliente')}}
@endcomponent

{{__('Obrigado')}},<br>
{{ config('app.name') }}
@endcomponent
