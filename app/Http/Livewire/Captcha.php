<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Captcha extends Component
{

    public $captcha;


    protected $listeners = ['reloadCaptcha'];


    public function reloadCaptcha()
    {
        $this->captcha = captcha_src('flat');
        $this->dispatchBrowserEvent('reloadCaptcha');
    }


    public function render()
    {
        return view('livewire.captcha');
    }


    public function mount()
    {
        $this->captcha = captcha_src('flat');
    }

}
