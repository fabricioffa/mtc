<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="Envie SMS’s em Massa ao melhor preço do mercado.">
    <title>{{ config('app.name') }} &mdash; @yield('title')</title>
    <link rel="shortcut icon" href="{{ asset('assets/img/favicons/favicon.ico') }}" type="image/x-icon" />
    <link rel="stylesheet" href="{{ mix('assets/css/app.css') }}">
    @stack('stylesheet')

</head>

<body>
    @yield('banner')
    <main>
        @yield('content')
    </main>

    @if (Request::path() != 'registro')
        @include('includes.footer')
    @endif


    <script src="{{ mix('assets/js/app.js') }}"></script>
    @stack('javascript')
</body>

</html>
