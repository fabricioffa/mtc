@extends('layouts.master')

@section('title', 'Apis de conexão')

@include('includes.dark-navbar')

@section('banner')
    <section class="bg-primary py-5">
        <div class="container pb-5 mb-5">

            <div class="d-flex flex-column flex-lg-row justify-content-between font-space-grotesk pt-lg-5 mt-4 mt-xl-5">
                <div class="text-white text-center text-lg-start pt-lg-5">
                    <h1 class="fw-bold ls-1 fs-36-50 mb-4 mb-lg-3 mt-5 mt-xxl-0 mx-auto mx-lg-0">Apis de conexão</h1>
                    <p class="fs-18-22 pb-5 mb-0 mb-lg-3">HTTP REST, HTTP GET, SMP</p>

                    <a class="d-lg-none bg-secondary btn-padding text-white fw-500 text-decoration-none rounded-4 fs-18"
                        href="{{ route('registro') }}" role="button">Registro</a>
                </div>
                <div class="col-lg-5 align-self-lg-center pt-3 pt-lg-4 pt-xl-0 mt-5 mt-xl-0">
                    <img class="d-block img-fluid mx-auto me-xl-0 ms-lg-auto pe-2 pe-sm-0"
                        src="{{ asset('assets/imgs/banners/apis.svg') }}" alt="" aria-hidden="true">
                </div>
            </div>

        </div>
    </section>
@endsection

@section('content')
<section class="bg-fa font-space-grotesk pt-1 pt-lg-6 pb-6">
    <div class="container pt-5 mt-2 pt-lg-3 mt-lg-0 mb-5 mb-sm-4 mb-lg-5 pb-5 pb-sm-0 pb-lg-6 gx-3">

        <div class="bg-edeef0 rounded-30 py-4 mb-5">
            <div
                class="col-11 col-lg-10 d-flex flex-column flex-lg-row justify-content-between align-items-center text-center text-lg-start my-2 py-4 mx-auto">
                <div class="text-start text-sm-center text-lg-start">
                    <h2 class="fs-22-32 fw-bold text-2b2d42 mb-5 pt-2">SMS gateway http REST</h2>
                    <h3 class="fs-18-20 fw-500 text-1415 mb-4">Integração HTTP através de REST</h3>
                    <p class="fw-light text-1415 pb-2 mb-5">A API de conexão HTTP permite integrar a sua aplicação com o
                        nosso Gateway para o envio de SMS, utilizando o protocolo HTTP ou HTTPS ( para transações
                        seguras através de criptografia SSL). Ambos os pedidos e as respostas são feitas API REST em
                        formato JSON, tornando muito simples de usar API com qualquer linguagem de programação.</p>
                    <a class="fs-18 fw-500 text-white bg-secondary rounded-4 text-decoration-none py-3 px-5" href=""
                        role="button">Ver documentação</a>
                </div>

                <div class="col-lg-6 mt-5 mt-lg-0 pt-4 pt-lg-0">
                    <img class="d-block img-fluid rounded-12 ms-auto"
                        src="{{ asset('assets/imgs/decorative/apis-1.svg') }}" alt="" aria-hidden="true">
                </div>
            </div>
        </div>

        <div class="bg-edeef0 rounded-30 py-4 mb-5">
            <div
                class="col-11 d-flex flex-column flex-lg-row-reverse justify-content-between align-items-center text-center text-lg-start my-2 py-4 mx-auto">
                <div class="col-lg-5 text-start text-sm-center text-lg-start">
                    <h2 class="fs-22-32 fw-bold text-2b2d42 mb-5 pt-2">SMS gateway HTTP GET</h2>
                    <h3 class="fs-18-20 fw-500 text-1415 mb-4">Integração HTTP através de GET</h3>
                    <p class="fw-light text-1415 pb-2 mb-5">A API de integração HTTP através de GET é a API de
                        integração mais simples para o envio de SMS. Por norma, esta implementação é muito rápida e
                        fácil, suportando uma ampla gama de tipos de mensagens e de funcionalidades. Devido ao seu tempo
                        de integração, apenas é necessário um equipamento informático no qual possa executar o script ou
                        a aplicação e um navegador ou um ferramenta http.</p>
                    <a class="fs-18 fw-500 text-white bg-secondary rounded-4 text-decoration-none py-3 px-5" href=""
                        role="button">Ver documentação</a>
                </div>

                <div class="col-lg-6 mt-5 mt-lg-0 pt-4 pt-lg-0">
                    <img class="d-block img-fluid rounded-12 ms-auto"
                        src="{{ asset('assets/imgs/decorative/apis-2.svg') }}" alt="" aria-hidden="true">
                </div>
            </div>
        </div>

        <div class="bg-edeef0 rounded-30 py-4 mb-5">
            <div
                class="col-11 col-lg-10 d-flex flex-column flex-lg-row justify-content-between align-items-center text-center text-lg-start my-2 py-4 mx-auto">
                <div class="text-start text-sm-center text-lg-start">
                    <h2 class="fs-22-32 fw-bold text-2b2d42 mb-5 pt-2">SMS gateway SMPP</h2>
                    <h3 class="fs-18-20 fw-500 text-1415 mb-4">Integração através do protocolo padrão de SMS</h3>
                    <p class="fw-light text-1415 pb-2 mb-5">O protocolo Short Message Peer to Peer (SMPP) é o protocolo
                        que considera padrão da indústria para envio de SMS para o padrão da indústria de mensagens rede
                        do provedor projetado para simplificar a integração de aplicativos de dados com as redes móveis
                        sem fio.
                        Além disso, trata-se do protocolo mais utilizado na indústria de telecomunicações para o
                        intercâmbio de mensagens entre os SMSC (Short Message Service Centers) e ESME (External Short
                        Messaging Entities). Este protocolo garante a entrega rápida de SMS, permitindo que vários
                        pedidos de uma só vez.</p>
                    <a class="fs-18 fw-500 text-white bg-secondary rounded-4 text-decoration-none py-3 px-5" href=""
                        role="button">Ver documentação</a>
                </div>

                <div class="col-lg-6 mt-5 mt-lg-0 pt-4 pt-lg-0">
                    <img class="d-block img-fluid rounded-12 ms-auto"
                        src="{{ asset('assets/imgs/decorative/apis-3.svg') }}" alt="" aria-hidden="true">
                </div>
            </div>
        </div>

    </div>
</section>
@endsection
