@component('mail::message')
# {{__('Obrigado')}}!

{{__('Em breve um dos nosso comerciais entrará em contato.')}}

@component('mail::button', ['url' => 'https://sms.mytelecom.pt/', 'color' => 'primary'])
{{__('Espaço cliente')}}
@endcomponent

{{__('Obrigado')}},<br>
{{ config('app.name') }}
@endcomponent
