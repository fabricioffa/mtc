<?php

namespace App\Http\Livewire;

use App\Mail\RegistoMail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Mail;
use Illuminate\Validation\ValidationException;
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
    public $country = 'pt';
    public $currency = 'eur';
    public $state;

    public $captcha;

    protected $rules = [
        'name' => 'sometimes|nullable|string|min:2|max:50',
        'username' => 'required|alpha_dash|min:6|max:20',
        'email' => 'required|email',
        'password' => 'required|min:6|max:8|confirmed',
        'phone' => 'nullable|regex:/^([0-9\s\-\+\(\)]*)$/|min:6|max:30',
        'credit_limit' => 'nullable|numeric|max:10000000',
        'captcha' => 'required|captcha',
    ];

    public function data()
    {
        return [
            'name' => $this->name,
            'username' => $this->username,
            'email' => $this->email,
            'password' => $this->password,
            'password_confirmation' => $this->password_confirmation,
            'phone' => $this->phone,
            'credit_limit' => $this->credit_limit,
            'country' => $this->country,
            'currency' => $this->currency ,
            'state' => $this->state ,
        ];
    }

    public function updated($propertyName) {
        if ($propertyName === 'captcha') return;

        $this->validateOnly($propertyName);
    }

    private function resetForm() {
        $this->name = '';
        $this->username = '';
        $this->email = '';
        $this->password = '';
        $this->password_confirmation = '';
        $this->phone = '';
        $this->credit_limit = '';
        $this->acceptedTerms = false;

    }

    public function nextStep() {

        $rules = $this->rules;
        unset($rules['phone'], $rules['credit_limit'], $rules['captcha']);

        $this->validate($rules);

        $this->firstStep = false;
    }

    public function submit() {
        if (!$this->acceptedTerms){
            session()->flash('termsMsg', __('É necessário aceitar os Termos de Serviço para terminar o registo.'));
            return $this->reloadCaptcha();
        }

        $validator = Validator::make(
            array_merge($this->data(), ['captcha' => $this->captcha]),
            $this->rules,
        );

        if ($validator->fails()) {
            $this->reloadCaptcha();
            throw new ValidationException($validator);
        }

        try {
            Mail::to($this->email)->send(new RegistoMail($this->email));
        } catch (\Throwable $e) {
            $this->reloadCaptcha();
            $this->addError('email', __('O email fornecido parece não existir.'));
            $this->firstStep = true;
            report($e);
            return;
        }

        session()->flash('successMsg', __('Registo realizado com sucesso. Logo entraremos em contato.'));

        $this->reloadCaptcha();
        $this->firstStep = true;
        $this->resetForm();
    }


    public function reloadCaptcha()
    {
        $this->emit('reloadCaptcha');
        $this->captcha = '';
    }

    public function render() {
        return view('livewire.register-form');
    }
}
