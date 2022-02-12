<?php

namespace App\Http\Livewire;

use App\Mail\RegistoMail;
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

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }


    public function submit()
    {
        if (!$this->acceptedTerms) {
            session()->flash('termsMessage', 'É necessário aceitar os Termos de Serviço para terminar o registo.');
            return;
        }

        $this->validate();

        session()->flash('successMessage', "Cadastro realizado com sucesso.\n Logo entraremos em contato.");

        Mail::to($this->email)->send(new RegistoMail($this->email));

        $this->resetForm();
    }

    private function resetForm()
    {
        $this->name = '';
        $this->username = '';
        $this->email = '';
        $this->password = '';
        $this->password_confirmation = '';
        $this->phone = '';
        $this->credit_limit = '';
    }

    public function nextStep()
    {
        $this->validate([
            'name' => 'sometimes|nullable|alpha|min:6|max:50',
            'username' => 'required|alpha_dash|min:6|max:20',
            'email' => 'required|email',
            'password' => 'required|min:6|max:8|confirmed',
        ]);

        $this->firstStep = false;
    }

    public function render()
    {
        return view('livewire.register-form');
    }
}
