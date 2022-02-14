@extends('layouts.master')

@section('title', 'Criar conta')

@push('stylesheet')
    @livewireStyles
@endpush

@section('content')

    <div class="register d-flex font-space-grotesk text-2b2d42 min-vh-100">
        <aside class="col-3 d-none d-lg-block bg-primary">
            <a href="{{ route('homepage') }}"><img class="ps-5 ms-4 pt-5 mt-2"
                    src="{{ asset('assets/imgs/logos/register.svg') }}" alt="MTC logo - Home"></a>
            <img class="d-block mx-auto w-100 mt-5 pt-3" src="{{ asset('assets/imgs/decorative/register.svg') }}" alt=""
                aria-hidden="true">
        </aside>

        <section class="d-flex justify-content-center align-items-center bg-fa flex-grow-1 position-relative">
            <img class="position-absolute d-lg-none" src="{{ asset('assets/imgs/logos/light-navbar.svg') }}"
                alt="MTC logo">

            <nav class="fs-16 position-absolute" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active text-end "><a class="fs-15"
                            href="{{ route('homepage') }}">{{__('Voltar para a página inicial')}}</a>
                    </li>
                </ol>
            </nav>

            <div class="max-form-width mt-6 pt-5 pb-5 pb-lg-0">
                <header class="text-start text-sm-center">
                    <h1 class="fs-36-40 fw-bold">{{__('Criar Conta')}}</h1>
                    <p class="fw-500">{{__('Crie uma conta para usufruir do nosso serviço')}}</p>
                </header>

                <livewire:register-form />

            </div>

        </section>

    </div>

@endsection

@push('javascript')
    @livewireScripts
@endpush
