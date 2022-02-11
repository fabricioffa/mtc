<?php

namespace App\Http\Livewire;

use App\Models\User;
use Illuminate\Http\Request;
use Livewire\Component;

class RegisterForm extends Component
{
    public $firstStep = true;
    public $successMsg = '';

    public $name;
    public $username;
    public $email;
    public $password;
    public $password_confirmation;
    public $country;
    public $currency;
    public $phone;
    public $credit_limit;

    protected $rules = [
        'name' => 'sometimes|nullable|alpha|min:6|max:50',
        'username' => 'required|alpha_dash|min:6|max:20',
        'email' => 'required|email',
        'password' => 'required|min:6|max:8|confirmed',
        'country' => 'required|alpha',
        'currency' => 'required|alpha',
        'phone' => 'nullable',
        'credit_limit' => 'nullable|numeric',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }


    public function submit()
    {
        // $this->validate();

        // User::create([
        //     'name' => $this->name,
        //     'username' => $this->username,
        //     'email' => $this->email,
        //     'password' => $this->password,
        //     'country' => $this->country,
        //     'currency' => $this->currency,
        //     'phone' => $this->phone,
        //     'credit_limit' => $this->creditLimit,
        // ]);

        session()->flash('message', 'Cadastro realizado com sucesso. Logo entraremos em contato.');

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
        $this->creditLimit = '';
    }

    public function nextStep(Request $request)
    {
        $this->validate();

        $this->firstStep = false;
    }

    public function render()
    {
        return view('livewire.register-form');
    }
}
