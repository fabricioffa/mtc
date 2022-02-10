@extends('layouts.master')

@section('title', 'SMS em massa')

@include('includes.dark-navbar')

@section('banner')
    <section class="bg-primary py-5">
        <div class="container pb-5 mb-5">

            <div class="d-flex flex-column flex-lg-row justify-content-end font-space-grotesk pt-lg-5 mt-4 mt-xl-5">
                <div class="text-white align-self-center text-center text-lg-start pt-lg-5">
                    <h1 class="col-11 fw-bold ls-1 fs-36-50 mb-4 mb-lg-3 mt-5 mt-xxl-0 mx-auto mx-lg-0">Campanhas de SMS
                        Marketing, com a
                        Mytelecom</h1>
                    <p class="fs-18-22 pb-5 mb-0 mb-lg-3">Realizar uma campanha de SMS Marketing nunca foi tão fácil e
                        simples.
                        Envie SMS e chegue a todos os seus clientes da forma mais simples e eficaz.
                        Temos as melhores rotas para todo o mundo aos melhores preços e graças a uma plataforma
                        altamente otimizada consegue ter uma autogestão da campanha!
                    </p>

                    <a class="d-lg-none bg-secondary btn-padding text-white fw-500 text-decoration-none rounded-4 fs-18"
                        href="{{ route('registro') }}" role="button">Registro</a>
                </div>
                <div class="col-lg-5 align-self-lg-center pt-3 pt-lg-4 pt-xl-0 mt-5 mt-xl-0">
                    <img class="d-block img-fluid mx-auto me-xl-0 ms-lg-auto pe-2 pe-sm-0"
                        src="{{ asset('assets/imgs/banners/em-massa.svg') }}" alt="" aria-hidden="true">
                </div>
            </div>

        </div>
    </section>
@endsection

@section('content')

    <section class="bg-fa font-space-grotesk pt-lg-5 pb-5 pb-lg-0">
        <div class="container pt-3 mt-2 pt-lg-0 mt-lg-0 pb-4 pb-lg-0 gx-3">
            <header class="col-lg-6 text-center pb-4 pt-5 mx-auto">
                <h2 class="fs-30-36 fw-bold text-primary mb-3">Destinatários</h2>
                <p class="fs-18-20 fw-light text-1d1e1f">Gira com total confiança as suas bases de dados com total
                    liberdade e segurança. Insira os números diretamente ou insira números de teste para os quais a
                    campanha será direcionada.</p>
            </header>

            <ul class="nav nav-tabs d-none d-lg-flex gap-5 justify-content-center border-0 mt-5 mx-auto"
                id="panels-tablist" role="tablist">
                <li class="nav-item" role="presentation">
                    <img class="d-block mx-auto cursor-pointer" src="{{ asset('assets/imgs/icons/close-btn.svg') }}" alt=""
                        aria-hidden="true">
                    <button class="nav-link bg-transparent fs-18 fw-500 border-0 px-0 mx-auto mx-xxl-0 active" id="panel-1-tab"
                        data-bs-toggle="tab" data-bs-target="#panel-1" type="button" role="tab" aria-controls="panel-1"
                        aria-selected="true">Exclusão de números</button>
                    <div class="rounded-pill tab-decoration-bar cursor-pointer" aria-hidden="true"></div>
                </li>
                <li class="nav-item ms-3" role="presentation">
                    <img class="d-block mx-auto cursor-pointer" src="{{ asset('assets/imgs/icons/segmentation.svg') }}" alt=""
                        aria-hidden="true">
                    <button class="nav-link bg-transparent fs-18 fw-500 border-0 px-0 mx-auto mx-xxl-0" id="panel-2-tab"
                        data-bs-toggle="tab" data-bs-target="#panel-2" type="button" role="tab" aria-controls="panel-2"
                        aria-selected="false">Segmentação de base de dados</button>
                    <div class="rounded-pill tab-decoration-bar cursor-pointer" aria-hidden="true"></div>
                </li>
                <li class="nav-item ms-3" role="presentation">
                    <img class="d-block mx-auto cursor-pointer" src="{{ asset('assets/imgs/icons/nine.svg') }}" alt=""
                        aria-hidden="true">
                    <button class="nav-link bg-transparent fs-18 fw-500 border-0 px-0 mx-auto mx-xxl-0" id="panel-3-tab"
                        data-bs-toggle="tab" data-bs-target="#panel-3" type="button" role="tab" aria-controls="panel-3"
                        aria-selected="false">Números de testes</button>
                    <div class="rounded-pill tab-decoration-bar cursor-pointer" aria-hidden="true"></div>
                </li>
            </ul>

            <div class="tab-content pt-lg-6" id="panels-tablist-content">

                <div class="tab-pane fade bg-edeef0 rounded-30 py-2 mobile-show show active" id="panel-1" role="tabpanel"
                    aria-labelledby="panel-1-tab">
                    <div
                        class="col-11 col-lg-10 d-flex flex-column flex-lg-row justify-content-between align-items-center text-center text-lg-start py-5 mx-auto">
                        <div class="text-primary ps-lg-2">
                            <img class="d-block d-lg-none mobile-size-icon mx-auto mb-4"
                                src="{{ asset('assets/imgs/icons/close-btn.svg') }}" alt="" aria-hidden="true">
                            <h4 class="fs-20-24 fw-500 mb-4">Exclusão de números</h4>
                            <p class="col-10 fw-light mx-auto mx-lg-0">Segmente a sua base de dados através de qualquer um dos
                                campos
                                incluídos, de forma a utilizar a mesma base de dados para diferentes campanhas.</p>
                        </div>
                        <div class="col-lg-7 mt-4 mt-lg-0">
                            <img class="img-fluid rounded-12" src="{{ asset('assets/imgs/panels/em-massa/panel-1.png') }}"
                                alt="Painel com tabela de contatos, com opção de exportar e de excluir contato.">
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade bg-edeef0 rounded-30 py-2 mobile-show mt-6 mt-lg-0" id="panel-2" role="tabpanel"
                    aria-labelledby="panel-2-tab">
                    <div
                        class="col-11 col-lg-10 d-flex flex-column flex-lg-row justify-content-between align-items-center text-center text-lg-start py-5 mx-auto">
                        <div class="text-primary ps-lg-2">
                            <img class="d-block d-lg-none mobile-size-icon mx-auto mb-4"
                                src="{{ asset('assets/imgs/icons/segmentation.svg') }}" alt="" aria-hidden="true">
                            <h4 class="fs-20-24 fw-500 mb-4">Segmentação de base de dados</h4>
                            <p class="col-10 fw-light mx-auto mx-lg-0">Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                                Saepe,
                                sed
                                optio
                                tenetur iusto, incidunt voluptate beatae itaque quo ex, voluptatum veniam porro. Omnis,
                                nulla
                                libero porro tenetur magni at eos.</p>
                        </div>
                        <div class="col-lg-7 mt-4 mt-lg-0">
                            <img class="img-fluid rounded-12" src="{{ asset('assets/imgs/panels/em-massa/panel-1.png') }}"
                                alt="">
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade bg-edeef0 rounded-30 py-2 mobile-show mt-6 mt-lg-0" id="panel-3" role="tabpanel"
                    aria-labelledby="panel-3-tab">
                    <div
                        class="col-11 col-lg-10 d-flex flex-column flex-lg-row justify-content-between align-items-center text-center text-lg-start py-5 mx-auto">
                        <div class="text-primary ps-lg-2">
                            <img class="d-block d-lg-none mobile-size-icon mx-auto mb-4"
                                src="{{ asset('assets/imgs/icons/nine.svg') }}" alt="" aria-hidden="true">
                            <h4 class="fs-20-24 fw-500 mb-4">Números de testes</h4>
                            <p class="col-10 fw-light mx-auto mx-lg-0">Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                                Saepe,
                                sed
                                optio
                                tenetur iusto, incidunt voluptate beatae itaque quo ex, voluptatum veniam porro. Omnis,
                                nulla
                                libero porro tenetur magni at eos.</p>
                        </div>
                        <div class="col-lg-7 mt-4 mt-lg-0">
                            <img class="img-fluid rounded-12"
                                src="{{ asset('assets/imgs/panels/em-massa/panel-3.png') }}" alt="">
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </section>

    <section class="bg-fa pt-5 pb-6 d-none d-lg-block">
        <div class="container py-5">
            <div class="bg-edeef0 rounded-30 position-relative text-center pt-6 pb-6">
                <h2 class="fw-bold fs-30-36 text-2b2d42 mb-4 pt-4 mt-2">Gestão de campanhas</h2>
                <p class="col-4 text-1415 mx-auto pb-4 mb-2">Para ter uma total gestão das suas campanhas,
                    basta uma inscrição na nossa plataforma.<br>
                    Personalize as suas campanhas para obter relatórios e estatísticas através de filtros.<br>
                    Veja e analise os relatórios e estatísticas mais detalhados, com a opção de fazer download dos
                    mesmos.<br>
                    Poderá pausar uma das suas campanhas e mais tarde reativá-las,.<br> como copiar, guardar e editar
                    para um momento opurtuno.
                </p>
                <img class="position-absolute w-100 start-0 top-10per"
                    src="{{ asset('assets/imgs/decorative/em-massa.svg') }}" alt="" aria-hidden="true">
            </div>
        </div>
    </section>

    <section class="bg-primary pt-5 pt-lg-6 pb-5 pb-sm-4 pb-lg-6">
        <div class="container text-start text-sm-center text-xl-start pb-5 mb-5 mb-xl-0 pb-lg-6 pt-3 pt-lg-2 mt-lg-4 gx-4">
            <header class="text-center text-white pb-6">
                <h2 class="font-space-grotesk fw-bold fs-30-36 mb-3">Outras funcionalidades</h2>
                <p class="col-md-9 col-xl-6 col-xxl-5 font-archivo fs-18 mb-0 mx-auto">Através da nossa plataforma, consegue
                    ter
                    acesso a muitas funcionalidades, entre quais destacamos as seguintes:</p>
            </header>

            <div class="row gap-5 flex-column flex-xl-row mx-0">
                <div class="col card bg-1d1e1f card-min-h rounded-10 pt-4 px-4 pt-sm-5 px-sm-5">
                    <div class="card-body font-space-grotesk fw-500 p-0 mb-xl-0">
                        <h3 class="card-title text-white fs-20">Programação de eventos</h3>
                        <p
                            class="col-md-8 col-lg-6 col-xl-10 col-xxl-8 card-text text-e7 fw-light text-e7 mb-3 mb-md-0 mx-md-auto mx-xl-0">
                            Programe os envios das suas campanhas, para que as
                            mesmas se
                            realizem no dia e hora ideal.</p>
                    </div>
                    <picture class="col-sm-9 col-xl-12 mx-autocol-11 col-md-12 col-lg-9 col-xl-12 mx-auto">
                        <source media="(min-width: 767.92px)"
                            srcset="{{ asset('assets/imgs/cards/em-massa/card-1.svg') }}">
                        <img class="card-img-bottom mt-4 mt-lg-0" src="{{ asset('assets/imgs/cards/em-massa/card-1-small.svg') }}"
                            alt="">
                    </picture>
                </div>

                <div class="col card bg-1d1e1f card-min-h rounded-10 pt-4 px-4 pt-sm-5 px-sm-5">
                    <div class="card-body font-space-grotesk fw-500 p-0">
                        <h3 class="card-title text-white fs-20">Caracteres especiais </h3>
                        <p
                            class="col-md-10 col-lg-7 col-xl-11 col-xxl-9 card-text text-e7 fw-light text-e7 mx-md-auto mx-xl-0">
                            Escolha a codificação desejada (UTF ou GSM): para
                            que a sua
                            mensagem seja enviada com ou sem caracteres espciais</p>
                    </div>
                    <picture
                        class="col-sm-9 col-xl-12 mx-autocol-11 col-md-12 col-lg-9 col-xl-12 mx-auto pb-4 mb-2 mb-md-0 pb-md-0">
                        <source media="(min-width: 767.92px)"
                            srcset="{{ asset('assets/imgs/cards/em-massa/card-2.svg') }}">
                        <img class="card-img-bottom" src="{{ asset('assets/imgs/cards/em-massa/card-2-small.svg') }}"
                            alt="">
                    </picture>
                </div>
            </div>

            <div class="row gap-5 flex-column flex-xl-row pt-5 mt-xl-4 pt-xl-2 pb-lg-3 pb-xl-0 mx-0">
                <div class="col card bg-1d1e1f card-min-h rounded-10 pt-4 px-4 pt-sm-5 px-sm-5">
                    <div class="card-body font-space-grotesk fw-500 p-0">
                        <h3 class="card-title text-white fs-20">Personalização dos textos</h3>
                        <p class="card-text text-e7 fw-light text-e7">Personalização das mensagens. Personalize as suas
                            campanhas
                            com o nome, apelidos ou quaisquer informações da sua base de dados. Os destinatários verão a
                            sua mensagem personalizada, o que irá aumentar a percentagem de aberturas e a eficácia das
                            suas promoções.</p>
                    </div>
                    <picture
                        class="col-sm-9 col-xl-12 mx-autocol-11 col-md-12 col-lg-9 col-xl-12 mx-auto pb-2 pb-md-4 pb-lg-5">
                        <source media="(min-width: 767.92px)"
                            srcset="{{ asset('assets/imgs/cards/em-massa/card-3.svg') }}">
                        <img class="card-img-bottom pb-md-5 pb-xl-0"
                            src="{{ asset('assets/imgs/cards/em-massa/card-3-small.svg') }}" alt="">
                    </picture>
                </div>

                <div class="col card bg-1d1e1f card-min-h rounded-10 pt-4 px-4 pt-sm-5 px-sm-5">
                    <div class="card-body font-space-grotesk fw-500 p-0 mb-xl-0">
                        <h3 class="card-title text-white fs-20">Pré-visualisar </h3>
                        <p
                            class="col-md-10 col-lg-8 col-xl-11 col-xxl-10 card-text text-e7 fw-light text-e7 mb-3 mb-md-0 mx-md-auto mx-xl-0">
                            Pré-visualização da mesnagem: evite erros com a
                            ferramenta
                            de pré-visualisação antes de proceder ao envio</p>
                    </div>
                    <picture class="col-sm-9 col-xl-12 mx-autocol-11 col-md-12 col-lg-9 col-xl-12 mx-auto">
                        <source media="(min-width: 767.92px)"
                            srcset="{{ asset('assets/imgs/cards/em-massa/card-4.svg') }}">
                        <img class="card-img-bottom" src="{{ asset('assets/imgs/cards/em-massa/card-4-small.svg') }}"
                            alt="">
                    </picture>
                </div>
            </div>

        </div>
    </section>

@endsection
