@extends('layouts.master')

@section('title', 'SMS por rotas SIM')

@include('includes.light-navbar')

@section('banner')
    <section class="bg-white pt-6 pb-lg-6">
        <div class="container pt-4 pt-lg-6 mt-lg-5 pb-5 pb-lg-6">
            <div class="d-flex flex-column flex-lg-row">
                <header class="font-space-grotesk text-center text-lg-start text-0e pb-5 pb-lg-0">
                    <h1 class="fs-36-50 fw-bold ls-1 mb-3">O envio de SMS por
                        ROTAS
                        SIM
                        nunca foi tão descomplicado!</h1>
                    <p class="col-lg-11 col-xxl-10 fs-18-20 fw-500">Gira com total confiança as suas bases de dados com total
                        liberdade e segurança. Insira os números
                        diretamente ou insira números de teste para os quais a campanha será direcionada.</p>
                </header>

                <div class="banner-balloon col-sm-10 col-md-8 col-lg-5 align-self-lg-end bg-white rounded-10 font-archivo position-relative mx-auto mx-lg-0 pt-3 pb-4 my-5 mb-lg-0 mt-lg-6">
                    <div class="d-flex justify-content-between border-bottom border-color-b6  ps-4 pe-3 pb-2">
                        <h4 class="fw-500 fs-16-22 text-0e">Para Espanha</h4>
                        <img src="{{ asset('assets/imgs/icons/flags/spain-small.svg') }}" alt="Bandeira da Espanha">
                    </div>
                    <div class="d-flex flex-column align-items-start ps-4 pe-3 h-100">
                        <p class="text-secondary fs-18-32 fw-500 pt-sm-4 mt-2">0.019€ / por Sms</p>
                        <a class="d-block bg-secondary rounded-4 fs-19 text-decoration-none fw-500 text-white mt-2 mt-sm-auto"
                            href="{{ route('registro') }} " role="button">Registo grátis</a>
                    </div>
                    <img class="balloon-tail position-absolute" src="{{ asset('assets/imgs/vectors/balloon-tail.svg') }}" alt="">
                </div>
            </div>
        </div>
    </section>
@endsection

@section('content')
    <section class="bg-white font-space-grotesk pt-4 pt-lg-5 pb-4 pb-lg-0">
        <div class="container pt-5 pt-lg-0 pb-4 pb-lg-0 gx-3">

            <div class="bg-edeef0 rounded-12 rounded-lg-30 p-4 p-md-5">
                <div
                    class="d-flex flex-column flex-lg-row align-items-start align-items-sm-center justify-content-lg-between pt-2 pt-lg-3 pb-5">
                    <h2
                        class="col-lg-6 col-xl-5 col-xxl-4 fs-30 fw-bold text-0e text-start text-sm-center text-lg-start mb-4 mb-lg-0">
                        Países em destaque com Rotas ao melhor preço</h2>
                    <p class="align-self-lg-start bg-a0fff4 rounded-02 fw-500 text-00685c px-3 py-2 mb-0">SMS Rotas SIM</p>
                </div>

                <div class="d-flex flex-wrap gap-2 gap-lg-custom-1 text-center pb-3 pb-lg-2 mb-1">
                    <div class="flex-grow-1 bg-white rounded-5 pt-4 pb-3 px-4">
                        <img class="mb-1" src="{{ asset('assets/imgs/icons/flags/canada.svg') }}"
                            alt="Bandeira do Canada" class="d-block mx-auto">
                        <h6 class="fs-17 fw-500 text-1d1e1f">Canada</h6>
                        <p class="fs-17 text-1d1e1f fw-500 mb-0"><span class="fw-bold fs-24 text-secondary">0.01010</span>
                            €/SMS
                        </p>
                    </div>
                    <div class="flex-grow-1 bg-white rounded-5 pt-4 pb-3 px-4">
                        <img class="mb-1" src="{{ asset('assets/imgs/icons/flags/france.svg') }}"
                            alt="Bandeira da França" class="d-block mx-auto">
                        <h6 class="fs-17 fw-500 text-1d1e1f">França</h6>
                        <p class="fs-17 text-1d1e1f fw-500 mb-0"><span class="fw-bold fs-24 text-secondary">0.01010</span>
                            €/SMS
                        </p>
                    </div>
                    <div class="flex-grow-1 bg-white rounded-5 pt-4 pb-3 px-4">
                        <img class="mb-1" src="{{ asset('assets/imgs/icons/flags/swiss.svg') }}"
                            alt="Bandeira da Suiça" class="d-block mx-auto">
                        <h6 class="fs-17 fw-500 text-1d1e1f">Suiça</h6>
                        <p class="fs-17 text-1d1e1f fw-500 mb-0"><span class="fw-bold fs-24 text-secondary">0.01010</span>
                            €/SMS
                        </p>
                    </div>
                    <div class="flex-grow-1 bg-white rounded-5 pt-4 pb-3 px-4">
                        <img class="mb-1" src="{{ asset('assets/imgs/icons/flags/china.svg') }}"
                            alt="Bandeira da China" class="d-block mx-auto">
                        <h6 class="fs-17 fw-500 text-1d1e1f">China</h6>
                        <p class="fs-17 text-1d1e1f fw-500 mb-0"><span class="fw-bold fs-24 text-secondary">0.01010</span>
                            €/SMS
                        </p>
                    </div>
                    <div class="flex-grow-1 bg-white rounded-5 pt-4 pb-3 px-4">
                        <img class="mb-1" src="{{ asset('assets/imgs/icons/flags/spain.svg') }}"
                            alt="Bandeira da Espanha" class="d-block mx-auto">
                        <h6 class="fs-17 fw-500 text-1d1e1f">Espanha</h6>
                        <p class="fs-17 text-1d1e1f fw-500 mb-0"><span class="fw-bold fs-24 text-secondary">0.01010</span>
                            €/SMS
                        </p>
                    </div>

                    <div class="flex-grow-1 bg-white rounded-5 pt-4 pb-3 px-4">
                        <img class="mb-1" src="{{ asset('assets/imgs/icons/flags/uk.svg') }}"
                            alt="Bandeira do Reino Unido" class="d-block mx-auto">
                        <h6 class="fs-17 fw-500 text-1d1e1f">Reino Unido</h6>
                        <p class="fs-17 text-1d1e1f fw-500 mb-0"><span class="fw-bold fs-24 text-secondary">0.01010</span>
                            €/SMS
                        </p>
                    </div>
                    <div class="flex-grow-1 bg-white rounded-5 pt-4 pb-3 px-4">
                        <img class="mb-1" src="{{ asset('assets/imgs/icons/flags/indonesia.svg') }}"
                            alt="Bandeira da Indonésia" class="d-block mx-auto">
                        <h6 class="fs-17 fw-500 text-1d1e1f">Indonésia</h6>
                        <p class="fs-17 text-1d1e1f fw-500 mb-0"><span class="fw-bold fs-24 text-secondary">0.01010</span>
                            €/SMS
                        </p>
                    </div>
                    <div class="flex-grow-1 bg-white rounded-5 pt-4 pb-3 px-4">
                        <img class="mb-1" src="{{ asset('assets/imgs/icons/flags/italy.svg') }}"
                            alt="Bandeira da Itália" class="d-block mx-auto">
                        <h6 class="fs-17 fw-500 text-1d1e1f">Itália</h6>
                        <p class="fs-17 text-1d1e1f fw-500 mb-0"><span class="fw-bold fs-24 text-secondary">0.01010</span>
                            €/SMS
                        </p>
                    </div>
                    <div class="flex-grow-1 bg-white rounded-5 pt-4 pb-3 px-4">
                        <img class="mb-1" src="{{ asset('assets/imgs/icons/flags/netherlands.svg') }}"
                            alt="Bandeira da Holanda" class="d-block mx-auto">
                        <h6 class="fs-17 fw-500 text-1d1e1f">Holanda</h6>
                        <p class="fs-17 text-1d1e1f fw-500 mb-0"><span class="fw-bold fs-24 text-secondary">0.01010</span>
                            €/SMS
                        </p>
                    </div>
                    <div class="flex-grow-1 bg-white rounded-5 pt-4 pb-3 px-4">
                        <img class="mb-1" src="{{ asset('assets/imgs/icons/flags/norway.svg') }}"
                            alt="Bandeira da Noruega" class="d-block mx-auto">
                        <h6 class="fs-17 fw-500 text-1d1e1f">Noruega</h6>
                        <p class="fs-17 text-1d1e1f fw-500 mb-0"><span class="fw-bold fs-24 text-secondary">0.01010</span>
                            €/SMS
                        </p>
                    </div>

                    <div class="flex-grow-1 bg-white rounded-5 pt-4 pb-3 px-4">
                        <img class="mb-1" src="{{ asset('assets/imgs/icons/flags/new-zeland.svg') }}"
                            alt="Bandeira da Nova Zelândia" class="d-block mx-auto">
                        <h6 class="fs-17 fw-500 text-1d1e1f">Nova Zelândia</h6>
                        <p class="fs-17 text-1d1e1f fw-500 mb-0"><span class="fw-bold fs-24 text-secondary">0.01010</span>
                            €/SMS
                        </p>
                    </div>
                    <div class="flex-grow-1 bg-white rounded-5 pt-4 pb-3 px-4">
                        <img class="mb-1" src="{{ asset('assets/imgs/icons/flags/pakistan.svg') }}"
                            alt="Bandeira do Paquistão" class="d-block mx-auto">
                        <h6 class="fs-17 fw-500 text-1d1e1f">Paquistão</h6>
                        <p class="fs-17 text-1d1e1f fw-500 mb-0"><span class="fw-bold fs-24 text-secondary">0.01010</span>
                            €/SMS
                        </p>
                    </div>
                    <div class="flex-grow-1 bg-white rounded-5 pt-4 pb-3 px-4">
                        <img class="mb-1" src="{{ asset('assets/imgs/icons/flags/sweden.svg') }}"
                            alt="Bandeira da Suécia" class="d-block mx-auto">
                        <h6 class="fs-17 fw-500 text-1d1e1f">Suécia</h6>
                        <p class="fs-17 text-1d1e1f fw-500 mb-0"><span class="fw-bold fs-24 text-secondary">0.01010</span>
                            €/SMS
                        </p>
                    </div>
                    <div class="flex-grow-1 bg-white rounded-5 pt-4 pb-3 px-4">
                        <img class="mb-1" src="{{ asset('assets/imgs/icons/flags/singapure.svg') }}"
                            alt="Bandeira da Cingapura" class="d-block mx-auto">
                        <h6 class="fs-17 fw-500 text-1d1e1f">Cingapura</h6>
                        <p class="fs-17 text-1d1e1f fw-500 mb-0"><span class="fw-bold fs-24 text-secondary">0.01010</span>
                            €/SMS
                        </p>
                    </div>
                    <div class="flex-grow-1 bg-white rounded-5 pt-4 pb-3 px-4">
                        <img class="mb-1" src="{{ asset('assets/imgs/icons/flags/eua.svg') }}"
                            alt="Bandeira dos Estados Unidos" class="d-block mx-auto">
                        <h6 class="fs-17 fw-500 text-1d1e1f">Estados Unidos</h6>
                        <p class="fs-17 text-1d1e1f fw-500 mb-0"><span class="fw-bold fs-24 text-secondary">0.01010</span>
                            €/SMS
                        </p>
                    </div>
                </div>
            </div>

        </div>

    </section>

    <section class="bg-white font-space-grotesk pt-lg-5 pb-5 pb-lg-6 mb-4">
        <div class="container pt-3 pt-lg-5 pb-4 pb-lg-6 mb-5 gx-3">

            <div class="bg-edeef0 rounded-12 rounded-lg-30 p-4 p-md-5">
                <div
                    class="d-flex flex-column flex-lg-row align-items-start align-items-start align-items-sm-center justify-content-lg-between pt-2 pt-lg-3 pb-5">
                    <header
                        class="col-lg-8 col-xl-6 col-xxl-5 text-0e text-start text-sm-center text-lg-start mb-4 mb-lg-0">
                        <h2 class="fs-30 fw-bold mb-3">
                            Internacionalmente, atuamos em outros países também, tais como:</h2>
                        <p class="fs-18 fw-500 ">Se possui o interesse em mercados internacionais, conte agora com a nossa
                            rede de SMS
                            Internacionais.</p>
                    </header>
                    <p class="align-self-lg-start bg-a0fff4 rounded-02 fw-500 text-00685c px-3 py-2 mb-0">SMS Rotas SIM</p>
                </div>

                <div
                    class="row-cols-1 row-cols-lg-3 row-cols-xxl-4 d-flex flex-wrap gap-2 gap-lg-custom-2 pb-3 pb-lg-2 mb-1">
                    <div class="flex-grow-1 d-flex align-items-center bg-white rounded-5 py-4 ps-4 pe-3">
                        <img src="{{ asset('assets/imgs/icons/flags/andorra.svg') }}" alt="Bandeira de Andorra">
                        <h6 class="fw-500 text-1d1e1f ms-3">Andorra</h6>
                        <p class="fw-bold fs-18-24 text-secondary ms-auto mb-0">0.01010€</p>
                    </div>
                    <div class="flex-grow-1 d-flex align-items-center bg-white rounded-5 py-4 ps-4 pe-3">
                        <img src="{{ asset('assets/imgs/icons/flags/emirates.svg') }}"
                            alt="Bandeira dos Emirados Árabes Unidos">
                        <h6 class="fw-500 text-1d1e1f ms-3">Emirados<br>Árabes Unidos</h6>
                        <p class="fw-bold fs-18-24 text-secondary ms-auto mb-0">0.01010€</p>
                    </div>
                    <div class="flex-grow-1 d-flex align-items-center bg-white rounded-5 py-4 ps-4 pe-3">
                        <img src="{{ asset('assets/imgs/icons/flags/afghanistan.svg') }}" alt="Bandeira do Afeganistão">
                        <h6 class="fw-500 text-1d1e1f ms-3">Afeganistão</h6>
                        <p class="fw-bold fs-18-24 text-secondary ms-auto mb-0">0.01010€</p>
                    </div>
                    <div class="flex-grow-1 d-flex align-items-center bg-white rounded-5 py-4 ps-4 pe-3">
                        <img src="{{ asset('assets/imgs/icons/flags/antigua-barbuda.svg') }}"
                            alt="Bandeira de Antígua e Barbuda">
                        <h6 class="fw-500 text-1d1e1f ms-3">Antígua e<br> Barbuda</h6>
                        <p class="fw-bold fs-18-24 text-secondary ms-auto mb-0">0.01010€</p>
                    </div>
                    <div class="flex-grow-1 d-flex align-items-center bg-white rounded-5 py-4 ps-4 pe-3">
                        <img src="{{ asset('assets/imgs/icons/flags/albania.svg') }}" alt="Bandeira da Albânia">
                        <h6 class="fw-500 text-1d1e1f ms-3">Albânia</h6>
                        <p class="fw-bold fs-18-24 text-secondary ms-auto mb-0">0.01010€</p>
                    </div>

                    <div class="flex-grow-1 d-flex align-items-center bg-white rounded-5 py-4 ps-4 pe-3">
                        <img src="{{ asset('assets/imgs/icons/flags/armenia.svg') }}" alt="Bandeira da Armênia">
                        <h6 class="fw-500 text-1d1e1f ms-3">Armênia</h6>
                        <p class="fw-bold fs-18-24 text-secondary ms-auto mb-0">0.01010€</p>
                    </div>
                    <div class="flex-grow-1 d-flex align-items-center bg-white rounded-5 py-4 ps-4 pe-3">
                        <img src="{{ asset('assets/imgs/icons/flags/angola.svg') }}" alt="Bandeira da Angola">
                        <h6 class="fw-500 text-1d1e1f ms-3">Angola</h6>
                        <p class="fw-bold fs-18-24 text-secondary ms-auto mb-0">0.01010€</p>
                    </div>
                    <div class="flex-grow-1 d-flex align-items-center bg-white rounded-5 py-4 ps-4 pe-3">
                        <img src="{{ asset('assets/imgs/icons/flags/argentina.svg') }}" alt="Bandeira do Argentina">
                        <h6 class="fw-500 text-1d1e1f ms-3">Argentina</h6>
                        <p class="fw-bold fs-18-24 text-secondary ms-auto mb-0">0.01010€</p>
                    </div>
                    <div class="flex-grow-1 d-flex align-items-center bg-white rounded-5 py-4 ps-4 pe-3">
                        <img src="{{ asset('assets/imgs/icons/flags/austria.svg') }}" alt="Bandeira da Áustria">
                        <h6 class="fw-500 text-1d1e1f ms-3">Áustria</h6>
                        <p class="fw-bold fs-18-24 text-secondary ms-auto mb-0">0.01010€</p>
                    </div>
                    <div class="flex-grow-1 d-flex align-items-center bg-white rounded-5 py-4 ps-4 pe-3">
                        <img src="{{ asset('assets/imgs/icons/flags/australia.svg') }}" alt="Bandeira da Austrália">
                        <h6 class="fw-500 text-1d1e1f ms-3">Austrália</h6>
                        <p class="fw-bold fs-18-24 text-secondary ms-auto mb-0">0.01010€</p>
                    </div>
                    <div class="flex-grow-1 d-flex align-items-center bg-white rounded-5 py-4 ps-4 pe-3">
                        <img src="{{ asset('assets/imgs/icons/flags/aruba.svg') }}" alt="Bandeira de Aruba">
                        <h6 class="fw-500 text-1d1e1f ms-3">Aruba</h6>
                        <p class="fw-bold fs-18-24 text-secondary ms-auto mb-0">0.01010€</p>
                    </div>
                    <div class="flex-grow-1 d-flex align-items-center bg-white rounded-5 py-4 ps-4 pe-3">
                        <img src="{{ asset('assets/imgs/icons/flags/azerbaijan.svg') }}" alt="Bandeira do Azerbeijão">
                        <h6 class="fw-500 text-1d1e1f ms-3">Azerbeijão</h6>
                        <p class="fw-bold fs-18-24 text-secondary ms-auto mb-0">0.01010€</p>
                    </div>
                    <div class="flex-grow-1 d-flex align-items-center bg-white rounded-5 py-4 ps-4 pe-3">
                        <img src="{{ asset('assets/imgs/icons/flags/andorra.svg') }}" alt="Bandeira de Andorra">
                        <h6 class="fw-500 text-1d1e1f ms-3">Andorra</h6>
                        <p class="fw-bold fs-18-24 text-secondary ms-auto mb-0">0.01010€</p>
                    </div>
                    <div class="flex-grow-1 d-flex align-items-center bg-white rounded-5 py-4 ps-4 pe-3">
                        <img src="{{ asset('assets/imgs/icons/flags/emirates.svg') }}"
                            alt="Bandeira dos Emirados Árabes Unidos">
                        <h6 class="fw-500 text-1d1e1f ms-3">Emirados<br>Árabes Unidos</h6>
                        <p class="fw-bold fs-18-24 text-secondary ms-auto mb-0">0.01010€</p>
                    </div>
                    <div class="flex-grow-1 d-flex align-items-center bg-white rounded-5 py-4 ps-4 pe-3">
                        <img src="{{ asset('assets/imgs/icons/flags/afghanistan.svg') }}" alt="Bandeira do Afeganistão">
                        <h6 class="fw-500 text-1d1e1f ms-3">Afeganistão</h6>
                        <p class="fw-bold fs-18-24 text-secondary ms-auto mb-0">0.01010€</p>
                    </div>
                    <div class="flex-grow-1 d-flex align-items-center bg-white rounded-5 py-4 ps-4 pe-3">
                        <img src="{{ asset('assets/imgs/icons/flags/antigua-barbuda.svg') }}"
                            alt="Bandeira de Antígua e Barbuda">
                        <h6 class="fw-500 text-1d1e1f ms-3">Antígua e<br> Barbuda</h6>
                        <p class="fw-bold fs-18-24 text-secondary ms-auto mb-0">0.01010€</p>
                    </div>
                    <div class="flex-grow-1 d-flex align-items-center bg-white rounded-5 py-4 ps-4 pe-3">
                        <img src="{{ asset('assets/imgs/icons/flags/albania.svg') }}" alt="Bandeira da Albânia">
                        <h6 class="fw-500 text-1d1e1f ms-3">Albânia</h6>
                        <p class="fw-bold fs-18-24 text-secondary ms-auto mb-0">0.01010€</p>
                    </div>

                    <div class="flex-grow-1 d-flex align-items-center bg-white rounded-5 py-4 ps-4 pe-3">
                        <img src="{{ asset('assets/imgs/icons/flags/armenia.svg') }}" alt="Bandeira da Armênia">
                        <h6 class="fw-500 text-1d1e1f ms-3">Armênia</h6>
                        <p class="fw-bold fs-18-24 text-secondary ms-auto mb-0">0.01010€</p>
                    </div>
                    <div class="flex-grow-1 d-flex align-items-center bg-white rounded-5 py-4 ps-4 pe-3">
                        <img src="{{ asset('assets/imgs/icons/flags/angola.svg') }}" alt="Bandeira da Angola">
                        <h6 class="fw-500 text-1d1e1f ms-3">Angola</h6>
                        <p class="fw-bold fs-18-24 text-secondary ms-auto mb-0">0.01010€</p>
                    </div>
                    <div class="flex-grow-1 d-flex align-items-center bg-white rounded-5 py-4 ps-4 pe-3">
                        <img src="{{ asset('assets/imgs/icons/flags/argentina.svg') }}" alt="Bandeira do Argentina">
                        <h6 class="fw-500 text-1d1e1f ms-3">Argentina</h6>
                        <p class="fw-bold fs-18-24 text-secondary ms-auto mb-0">0.01010€</p>
                    </div>
                    <div class="flex-grow-1 d-flex align-items-center bg-white rounded-5 py-4 ps-4 pe-3">
                        <img src="{{ asset('assets/imgs/icons/flags/austria.svg') }}" alt="Bandeira da Áustria">
                        <h6 class="fw-500 text-1d1e1f ms-3">Áustria</h6>
                        <p class="fw-bold fs-18-24 text-secondary ms-auto mb-0">0.01010€</p>
                    </div>
                    <div class="flex-grow-1 d-flex align-items-center bg-white rounded-5 py-4 ps-4 pe-3">
                        <img src="{{ asset('assets/imgs/icons/flags/australia.svg') }}" alt="Bandeira da Austrália">
                        <h6 class="fw-500 text-1d1e1f ms-3">Austrália</h6>
                        <p class="fw-bold fs-18-24 text-secondary ms-auto mb-0">0.01010€</p>
                    </div>
                    <div class="flex-grow-1 d-flex align-items-center bg-white rounded-5 py-4 ps-4 pe-3">
                        <img src="{{ asset('assets/imgs/icons/flags/aruba.svg') }}" alt="Bandeira de Aruba">
                        <h6 class="fw-500 text-1d1e1f ms-3">Aruba</h6>
                        <p class="fw-bold fs-18-24 text-secondary ms-auto mb-0">0.01010€</p>
                    </div>
                    <div class="flex-grow-1 d-flex align-items-center bg-white rounded-5 py-4 ps-4 pe-3">
                        <img src="{{ asset('assets/imgs/icons/flags/azerbaijan.svg') }}" alt="Bandeira do Azerbeijão">
                        <h6 class="fw-500 text-1d1e1f ms-3">Azerbeijão</h6>
                        <p class="fw-bold fs-18-24 text-secondary ms-auto mb-0">0.01010€</p>
                    </div>
                </div>
            </div>

        </div>

    </section>

@endsection
