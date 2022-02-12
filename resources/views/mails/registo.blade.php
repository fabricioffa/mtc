@extends('layouts.mail')

@section('title', 'Confirmação de registo')
    <style>
        .container {
            background: red;
        }
    </style>
@push('stylesheet')

@endpush

@section('content')
    <div class="container bg-fa py-5">

        <div class="bg-fa text-center font-space-grotesk p-5 mx-auto">
            <h1 class="fs-36-50">Bem-vindo!</h1>

            <p class="fs-20-24 pt-5">Seu registo foi realizado com sucesso. Logo entraremos em contato</p>

            <button class="d-block bg-secondary btn-padding text-white fw-500 text-decoration-none rounded-4 fs-18 mx-auto border-0 mt-5">Visite nosso site</button>

            <p class="text-start fs-20-24 pt-5">Obrigado,<br>{{ config('app.name') }}</p>
        </div>

    </div>

@endsection
