<?php

namespace App\Http\Livewire;

use App\Mail\RegistoMail;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class RegisterForm extends Component
{
    public $firstStep = true;
    public $acceptedTerms = false;
    public $hidden = null;

    public $name;
    public $username;
    public $email;
    public $password;
    public $password_confirmation;
    public $phone;
    public $credit_limit;

    protected $rules = [
        'name' => 'sometimes|nullable|alpha|min:2|max:50',
        'username' => 'required|alpha_dash|min:6|max:20',
        'email' => 'required|email',
        'password' => 'required|min:6|max:8|confirmed',
        'phone' => 'nullable|regex:/^([0-9\s\-\+\(\)]*)$/|min:6|max:30',
        'credit_limit' => 'nullable|numeric',
    ];

    protected $validationAttributes;

    public function boot() {
        $this->validationAttributes = $this->getAttributesNames();
    }

    public function updated($propertyName) {
        $this->validateOnly($propertyName);
    }

    private function getAttributesNames(): array {
        switch (App::getLocale()) {
            case 'pt':
                return [
                    'name' => 'nome',
                    'username' => 'usuário',
                    'email' => 'email',
                    'password' => 'password',
                    'phone' => 'telefone',
                    'credit_limit' => 'limite de crédito',
                ];

            case 'es':
                return [
                    'name' => 'Nombre',
                    'username' => 'Usuario',
                    'email' => 'Email',
                    'password' => 'Password',
                    'phone' => 'Teléfono',
                    'credit_limit' => 'Límite de crédito',
                ];

            default:
                return [
                    'phone' => 'phone number',
                    'credit_limit' => 'credit limit',
                ];
        }
    }

    private function getTermsMsg(): string {
        switch (App::getLocale()) {
            case 'pt':
                return 'É necessário aceitar os Termos de Serviço para terminar o registo.';

            case 'es':
                return 'Hay que aceptar los Términos de Servicio para completar el registro.';

            default:
                return 'It\'s necessary to accept the Terms of Service to complete registration.';
            }
    }

    private function getSuccessMsg(): string {
        switch (App::getLocale()) {
            case 'pt':
                return 'Cadastro realizado com sucesso. Logo entraremos em contato.';

            case 'es':
                return 'Registro exitoso. Nos pondremos en contacto pronto.';

            default:
                return 'Successful registration. We\'ll be in touch soon.';
        }
    }

    private function resetForm() {
        $this->name = '';
        $this->username = '';
        $this->email = '';
        $this->password = '';
        $this->password_confirmation = '';
        $this->phone = '';
        $this->credit_limit = '';
    }

    public function nextStep() {
        $this->validate([
            'name' => 'sometimes|nullable|alpha|min:6|max:50',
            'username' => 'required|alpha_dash|min:6|max:20',
            'email' => 'required|email',
            'password' => 'required|min:6|max:8|confirmed',
        ]);

        $this->firstStep = false;
    }

    public function submit() {
        if (!$this->acceptedTerms) {
            session()->flash('termsMsg', $this->getTermsMsg());
            return;
        }

        $this->validate();

        session()->flash('successMsg', $this->getSuccessMsg());

        Mail::to($this->email)->send(new RegistoMail($this->email));

        $this->resetForm();
    }

    public function render() {
        return view('livewire.register-form');
    }
}
