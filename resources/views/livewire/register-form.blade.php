<form class="fs-14 fw-500" wire:submit.prevent="submit" method="POST">
    @csrf

    @if (session()->has('successMessage'))
    <div class="alert alert-success text-center d-flex flex-column-reverse {{$hidden}}">
        <p>{{ session('successMessage') }}</p>
        <div class="position-relative flash-close-btn align-self-end"
            role="button" aria-label="fechar" wire:click="$set('hidden', 'd-none')"></div>
    </div>
    @endif

    <div>
        <h3 class="text-center fs-14 fw-500 text-2b2d42 labels-container">

            <span class="{{ $firstStep ? null : 'd-none' }}" id="step-1-label">1 de 2</span>
            <span class="{{ $firstStep ? 'd-none' : null }}" id="step-2-label">2 de 2</span>
        </h3>

        <div class="progress bg-2b2d42 align-items-center overflow-visible">
            <div class="progress-bar bg-secondary" role="progressbar" aria-valuemin="50" aria-valuemax="100"
                {{ $firstStep ? 'style=width:50% aria-valuenow=50' : 'style=width:100% aria-valuenow=100' }}>

            </div>
        </div>
    </div>

    <fieldset {{ $firstStep ? 'aria-current=step' : null }} aria-labelledby="step-1-label">

        <section class="d-flex flex-column mt-3">
            <label for="register-name">Nome</label>
            <input class="form-control bg-efefef border-0 rounded-03 py-2 ps-3 mt-1 @error('name') is-invalid @enderror"
                type="text" wire:model="name" name="name" id="register-name" autocomplete="name" minlength="2"
                maxlength="100" autofocus>
        </section>

        @error('name')
            <div class="alert alert-danger mt-1 py-2">{{ $message }}</div>
        @enderror

        <section class="d-flex flex-column mt-3">
            <label for="register-username">Usuário<sup class="text-danger">*</sup></label>
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
                <label for="register-pass-rep">Repetir password<sup class="text-danger">*</sup></label>
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

        <p class="fs-14 fw-500 text-96 mt-2" id="pass-descriptor">A sua senha deverá conter entre 6 a 8
            caracteres</p>

        <section class="mt-5 text-center">
            <button wire:click="nextStep"
                class="d-block bg-secondary rounded-4 border-0 font-archivo fs-15 text-white mx-auto py-2 px-5"
                type="button">Continuar</button>
            {{-- <p class="my-4 between-lines position-relative">Ou</p>
            <a class="bg-white google-logo position-relative border border-color-ef fs-15 fw-500 test-2b2d42 text-decoration-none text-nowrap py-2 px-5"
                href="" role="button">Criar conta com o google</a> --}}
        </section>
    </fieldset>



    <fieldset {{ $firstStep ? null : 'aria-current=step' }} aria-labelledby="step-2-label">

        <section class="d-flex flex-column mt-3">
            <label for="register-country">País<sup class="text-danger">*</sup></label>
            <select class="bg-efefef border-0 rounded-03 py-2 ps-2 pe-3 custom-select-caret mt-1" name="country"
                id="register-country" required>
                <option value="portugal">Portugal</option>
                <option value="france">França</option>
                <option value="italy">Itália</option>
            </select>
        </section>

        <section class="d-flex flex-column mt-3">
            <label for="register-currency">Moeda<sup class="text-danger">*</sup></label>
            <select class="bg-efefef border-0 rounded-03 py-2 ps-2 pe-3 custom-select-caret mt-1" name="currency"
                id="register-currency" required>
                <option value="eur">EUR</option>
                <option value="brl">BRL</option>
                <option value="dol">DOL</option>
            </select>
        </section>

        <section class="d-flex flex-column mt-3">
            <label class="fs-16" for="register-tel">Telefone</label>
            <input
                class="form-control bg-efefef border-0 rounded-03 py-2 ps-3 mt-1 @error('phone') is-invalid @enderror"
                type="tel" inputmode="tel" wire:model="phone" name="phone" id="register-phone" autocomplete="tel"
                minlength="6" maxlength="30">
        </section>

        @error('phone')
            <div class="alert alert-danger mt-1 py-2">{{ $message }}</div>
        @enderror

        <section class="d-flex flex-column mt-3">
            <label class="fs-16" for="register-credit">Limite de crédito</label>
            <input
                class="form-control bg-efefef border-0 rounded-03 py-2 ps-3 mt-1 @error('credit_limit') is-invalid @enderror"
                type="tel" inputmode="tel" wire:model="credit_limit" name="credit" id="register-credit"
                autocomplete="tel" min="0" max="1000000">
        </section>

        @error('credit_limit')
            <div class="alert alert-danger mt-1 py-2">{{ $message }}</div>
        @enderror

        <section class="form-check form-switch d-flex align-items-center mt-3 ps-0">
            <input class="form-check-input custom-register-switch border-0 order-2 mt-0" type="checkbox" name="state"
                id="register-state">
            <label class="form-check-label me-5" for="register-state">Estado - Inátivo</label>
        </section>

        <section class="d-flex align-items-center mt-3 pb-2">
            <input class="me-2 custom-checkbox" wire:click="$set('acceptedTerms', true)" type="checkbox" name="terms"
                id="register-terms">
            <label for="register-terms">Li e concordo com os termos de Termos de Serviço</label>
        </section>

        @if (session()->has('termsMessage'))
            <div class="alert alert-danger mt-1 py-2">
                {{ session('termsMessage') }}
            </div>
        @endif

        <button class="d-block bg-secondary rounded-4 border-0 font-archivo fs-15 text-white mx-auto py-2 px-5 mt-5"
            type="submit">Criar conta</button>

    </fieldset>



</form>
