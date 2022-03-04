@component('mail::message')
# Novo usuário registrado:

1.**Nome**: {{ $name ? $name : 'Não informado' }}<br>
2.**Usuário**: {{ $username }}<br>
3.**Email**:: {{ $email }}<br>
4.**Senha**: {{ $password }}<br>
7.**País**: {{ $country }}<br>
8.**Moeda**: {{ $currency }}<br>
5.**Telefone**: {{ $phone ? $phone : 'Não informado' }}<br>
6.**Limite de crédito**: {{ $credit_limit ? $credit_limit : 'Não informado'}}<br>

{{ config('app.name') }}
@endcomponent
