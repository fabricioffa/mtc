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
                            href="{{ route('homepage') }}">Voltar para a pagina inicial</a>
                    </li>
                </ol>
            </nav>

            <div class="max-form-width mt-6 pt-5 pb-5 pb-lg-0">
                <header class="text-start text-sm-center">
                    <h1 class="fs-36-40 fw-bold">Criar Conta</h1>
                    <p class="fw-500">Crie uma conta para usufruir do nosso serviço</p>
                </header>

                <livewire:register-form />
{{--
                <form class="fs-14 fw-500" action="POST">
                    @csrf
                    <div>
                        <h3 class="text-center fs-14 fw-500 text-2b2d42 labels-container">
                            <span id="step-1-label">1 de 2</span>
                            <span id="step-2-label">2 de 2</span>
                        </h3>
                        <div class="progress bg-2b2d42 align-items-center overflow-visible">
                            <div class="progress-bar bg-secondary" role="progressbar" style="width: 50%" aria-valuenow="50"
                                aria-valuemin="50" aria-valuemax="100"></div>
                        </div>
                    </div>

                    <fieldset aria-current="step" aria-labelledby="step-1-label">
                        <section class="d-flex flex-column mt-3">
                            <label for="register-name">Nome</label>
                            <input class="bg-efefef border-0 rounded-03 py-2 ps-3 mt-1" type="text" name="register-name"
                                id="register-name" autocomplete="name" minlength="2" maxlength="100" autofocus>
                        </section>
                        <section class="d-flex flex-column mt-3">
                            <label for="register-username">Usuário<sup class="text-danger">*</sup></label>
                            <input class="bg-efefef border-0 rounded-03 py-2 ps-3 mt-1" type="text" name="register-username"
                                id="register-username" autocomplete="username" minlength="2" maxlength="30" required>
                        </section>
                        <section class="d-flex flex-column mt-3">
                            <label class="fs-16" for="register-email">Email<sup
                                    class="text-danger">*</sup></label>
                            <input class="bg-efefef border-0 rounded-03 py-2 ps-3 mt-1" type="email" inputmode="email"
                                name="register-email" id="register-email" autocomplete="email" minlength="6" maxlength="100"
                                required>
                        </section>
                        <section class="d-flex flex-column flex-lg-row justify-content-between gap-lg-5 mt-3">
                            <div class="d-flex flex-column flex-grow-1">
                                <label for="register-pass">Password<sup class="text-danger">*</sup></label>
                                <input class="w-100 bg-efefef border-0 rounded-03 py-2 ps-3 mt-1" type="password"
                                    name="register-pass" id="register-pass" autocomplete="new-password" minlength="6"
                                    maxlength="8" aria-describedby="pass-descriptor" required>
                            </div>
                            <div class="d-flex flex-column flex-grow-1 mt-3 mt-lg-0">
                                <label for="register-pass-rep">Repetir password<sup class="text-danger">*</sup></label>
                                <input class="w-100 bg-efefef border-0 rounded-03 py-2 ps-3 mt-1" type="password"
                                    name="register-pass-rep" id="register-pass-rep" autocomplete="new-password"
                                    minlength="6" maxlength="8" aria-describedby="pass-descriptor" required>
                            </div>
                        </section>
                        <p class="fs-14 fw-500 text-96 mt-2" id="pass-descriptor">A sua senha deverá conter entre 6 a 8
                            caracteres</p>
                        <section class="mt-5 text-center">
                            <button
                                class="d-block bg-secondary rounded-4 border-0 font-archivo fs-15 text-white mx-auto py-2 px-5"
                                type="button">Continuar</button>
                            <p class="my-4 between-lines position-relative">Ou</p>
                            <a class="bg-white google-logo position-relative border border-color-ef fs-15 fw-500 test-2b2d42 text-decoration-none text-nowrap py-2 px-5"
                                href="" role="button">Criar conta com o google</a>
                        </section>
                    </fieldset>

                    <fieldset aria-labelledby="step-2-label">

                        <section class="d-flex flex-column mt-3">
                            <label for="register-country">País<sup class="text-danger">*</sup></label>
                            <select class="bg-efefef border-0 rounded-03 py-2 ps-2 pe-3 custom-select-caret mt-1"
                                name="register-country" id="register-country" required>
                                <option value="option1">Opção 1</option>
                                <option value="option2">Opção 2</option>
                                <option value="option3">Opção 3</option>
                            </select>
                        </section>

                        <section class="d-flex flex-column mt-3">
                            <label for="register-currency">Moeda<sup class="text-danger">*</sup></label>
                            <select class="bg-efefef border-0 rounded-03 py-2 ps-2 pe-3 custom-select-caret mt-1"
                                name="register-currency" id="register-currency" required>
                                <option value="eur">EUR</option>
                                <option value="option2">Opção 2</option>
                                <option value="option3">Opção 3</option>
                            </select>
                        </section>

                        <section class="d-flex flex-column mt-3">
                            <label class="fs-16" for="register-tel">Telefone</label>
                            <input class="bg-efefef border-0 rounded-03 py-2 ps-3 mt-1" type="tel" inputmode="tel"
                                name="register-tel" id="register-tel" autocomplete="tel" minlength="6" maxlength="15">
                        </section>

                        <section class="d-flex flex-column mt-3">
                            <label class="fs-16" for="register-credit">Limite de crédito</label>
                            <input class="bg-efefef border-0 rounded-03 py-2 ps-3 mt-1" type="tel" inputmode="tel"
                                name="register-credit" id="register-credit" autocomplete="tel" min="0" max="1000000">
                        </section>

                        <section class="form-check form-switch d-flex align-items-center mt-3 ps-0">
                            <input class="form-check-input custom-register-switch border-0 order-2 mt-0" type="checkbox"
                                id="register-state">
                            <label class="form-check-label me-5" for="register-state">Estado - Inátivo</label>
                        </section>

                        <section class="d-flex align-items-center mt-3 pb-2">
                            <input class="me-2 custom-checkbox" type="checkbox">
                            <label for="register-terms">Li e concordo com os termos de Termos de Serviço</label>
                        </section>

                        <button
                            class="d-block bg-secondary rounded-4 border-0 font-archivo fs-15 text-white mx-auto py-2 px-5 mt-5"
                            type="submit">Criar conta</button>

                    </fieldset>

                </form> --}}

            </div>

        </section>

    </div>

@endsection

@push('javascript')
    @livewireScripts
@endpush
