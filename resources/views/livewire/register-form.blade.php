<form class="fs-14 fw-500" wire:submit.prevent="submit" method="POST">
    @csrf

    @if (session()->has('successMsg'))
        <div class="alert alert-success text-center d-flex flex-column-reverse {{ $hidden }}">
            <p>{{ session('successMsg') }}</p>
            <div class="position-relative flash-close-btn align-self-end" role="button" aria-label="fechar"
                wire:click="$set('hidden', 'd-none')"></div>
        </div>
    @endif

    <div>
        <h3 class="text-center fs-14 fw-500 text-2b2d42 labels-container">

            <span class="{{ $firstStep ? null : 'd-none' }}" id="step-1-label">1 {{ __('de') }} 2</span>
            <span class="{{ $firstStep ? 'd-none' : null }}" id="step-2-label">2 {{ __('de') }} 2</span>
        </h3>

        <div class="progress bg-2b2d42 align-items-center overflow-visible">
            <div class="progress-bar bg-secondary" role="progressbar" aria-valuemin="50" aria-valuemax="100"
                {{ $firstStep ? 'style=width:50% aria-valuenow=50' : 'style=width:100% aria-valuenow=100' }}>

            </div>
        </div>
    </div>

    <fieldset {{ $firstStep ? 'aria-current=step' : null }} aria-labelledby="step-1-label">

        <section class="d-flex flex-column mt-3">
            <label for="register-name">{{ __('Nome') }}</label>
            <input class="form-control bg-efefef border-0 rounded-03 py-2 ps-3 mt-1 @error('name') is-invalid @enderror"
                type="text" wire:model="name" name="name" id="register-name" autocomplete="name" minlength="2"
                maxlength="100" autofocus>
        </section>

        @error('name')
            <div class="alert alert-danger mt-1 py-2">{{ $message }}</div>
        @enderror

        <section class="d-flex flex-column mt-3">
            <label for="register-username">{{ __('Usuário') }}<sup class="text-danger">*</sup></label>
            <input
                class="form-control bg-efefef border-0 rounded-03 py-2 ps-3 mt-1 @error('username') is-invalid @enderror"
                type="text" wire:model="username" name="username" id="register-username" autocomplete="off"
                minlength="2" maxlength="30" required>
        </section>

        @error('username')
            <div class="alert alert-danger mt-1 py-2">{{ $message }}</div>
        @enderror

        <section class="d-flex flex-column mt-3">
            <label class="fs-16" for="register-email">Email<sup class="text-danger">*</sup></label>
            <input
                class="form-control bg-efefef border-0 rounded-03 py-2 ps-3 mt-1 @error('email') is-invalid @enderror"
                type="email" inputmode="email" wire:model="email" name="email" id="register-email" autocomplete="email"
                minlength="6" maxlength="100" required>
        </section>

        @error('email')
            <div class="alert alert-danger mt-1 py-2">{{ $message }}</div>
        @enderror

        <section class="d-flex flex-column flex-lg-row justify-content-between gap-lg-5 mt-3">
            <div class="d-flex flex-column flex-grow-1">
                <label for="register-pass">Password<sup class="text-danger">*</sup></label>
                <input
                    class="form-control w-100 bg-efefef border-0 rounded-03 py-2 ps-3 mt-1 @error('password') is-invalid @enderror"
                    type="password" wire:model="password" name="password" id="register-pass" autocomplete="new-password"
                    minlength="6" maxlength="8" aria-describedby="pass-descriptor" required>
            </div>
            <div class="d-flex flex-column flex-grow-1 mt-3 mt-lg-0">
                <label for="register-pass-rep">{{ __('Repetir') }} password<sup
                        class="text-danger">*</sup></label>
                <input
                    class="form-control w-100 bg-efefef border-0 rounded-03 py-2 ps-3 mt-1 @error('password') is-invalid @enderror"
                    type="password" wire:model="password_confirmation" name="password_confirmation"
                    id="register-pass-rep" autocomplete="new-password" minlength="6" maxlength="8"
                    aria-describedby="pass-descriptor" required>
            </div>
        </section>

        @error('password')
            <div class="alert alert-danger mt-1 py-2">{{ $message }}</div>
        @enderror

        <p class="fs-14 fw-500 text-96 mt-2" id="pass-descriptor">
            {{ __('A sua senha deverá conter entre 6 a 8 caracteres') }}</p>

        <section class="mt-5 text-center">
            <button wire:click="nextStep"
                class="d-block bg-secondary rounded-4 border-0 font-archivo fs-15 text-white mx-auto py-2 px-5"
                type="button">{{ __('Continuar') }}</button>
        </section>
    </fieldset>



    <fieldset {{ $firstStep ? null : 'aria-current=step' }} aria-labelledby="step-2-label">

        <section class="d-flex flex-column mt-3">
            <label for="register-country">{{ __('País') }}<sup class="text-danger">*</sup></label>
            <select class="bg-efefef border-0 rounded-03 py-2 ps-2 pe-3 custom-select-caret mt-1" wire:model="country"
                name="country" id="register-country" required>
                <option default value="pt">{{ __('Portugal') }}</option>
                <option value="fr">{{ __('França') }}</option>
                <option value="it">{{ __('Itália') }}</option>
            </select>
        </section>

        <section class="d-flex flex-column mt-3">
            <label for="register-currency">{{ __('Moeda') }}<sup class="text-danger">*</sup></label>
            <select class="bg-efefef border-0 rounded-03 py-2 ps-2 pe-3 custom-select-caret mt-1" wire:model="currency"
                name="currency" id="register-currency" required>
                <option default value="eur">EUR</option>
                <option value="brl">BRL</option>
                <option value="dol">DOL</option>
            </select>
        </section>

        <section class="d-flex flex-column mt-3">
            <label class="fs-16" for="register-tel">{{ __('Telefone') }}</label>
            <input
                class="form-control bg-efefef border-0 rounded-03 py-2 ps-3 mt-1 @error('phone') is-invalid @enderror"
                type="tel" inputmode="tel" wire:model="phone" name="phone" id="register-phone" autocomplete="tel"
                minlength="6" maxlength="30">
        </section>

        @error('phone')
            <div class="alert alert-danger mt-1 py-2">{{ $message }}</div>
        @enderror

        <section class="d-flex flex-column mt-3">
            <label class="fs-16" for="register-credit">{{ __('Limite de crédito') }}</label>
            <input
                class="form-control bg-efefef border-0 rounded-03 py-2 ps-3 mt-1 @error('credit_limit') is-invalid @enderror"
                type="number" inputmode="tel" wire:model="credit_limit" name="credit" id="register-credit" step="0.01" min="0"
                max="99999999">
        </section>

        @error('credit_limit')
            <div class="alert alert-danger mt-1 py-2">{{ $message }}</div>
        @enderror

        <section class="d-flex align-items-center mt-3 pb-2">
            <input class="me-2 custom-checkbox" wire:click="$toggle('acceptedTerms')" type="checkbox" name="terms"
                id="register-terms">
            <label for="register-terms">{{ __('Li e concordo com os termos de Termos de Serviço') }}</label>
        </section>

        @if (session()->has('termsMsg'))
            <div class="alert alert-danger mt-1 py-2">
                {{ session('termsMsg') }}
            </div>
        @endif

        <section class="d-flex flex-column mt-3 pb-2">
            <div class="captcha d-flex align-items-center mb-2" wire:ignore>
                <img src="">
                <i wire:click="reloadCaptcha" wire:loading.class="fa-spin" class="fas fa-sync-alt bg-secondary rounded-circle fs-5 text-white p-2 ms-3"></i>
            </div>
            <div class="col-md col">
                <div class="input-group-arrow-submit">
                    <input class="form-control text-uppercase ps-2" wire:model="captcha" placeholder="E9UADV">
                    <span wire:click="submit" wire:loading.class="no-action" style="cursor: pointer"
                        class="lnr lnr-arrow-right"></span>
                </div>

                @error('captcha')
                    <div class="alert alert-danger mt-1 py-2">{{ $message }}</div>
                @enderror
            </div>
        </section>


        <button class="d-block bg-secondary rounded-4 border-0 font-archivo fs-15 text-white mx-auto py-2 px-5 mt-4 mb-5"
            type="submit">{{ __('Criar conta') }}</button>

    </fieldset>



</form>
