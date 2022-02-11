<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="Envie SMS’s em Massa ao melhor preço do mercado.">
    <title>{{ config('app.name') }} &mdash; @yield('title')</title>
    @stack('stylesheet')

</head>

<body>
        @yield('content')

    @stack('javascript')
</body>

</html>
