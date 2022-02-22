<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Captcha extends Component
{

    public $captcha;


    protected $listeners = ['reloadCaptcha'];

    public function reloadCaptcha() {
        $this->captcha = captcha_src('flat');
        $this->dispatchBrowserEvent('reloadCaptcha');
    }

    public function mount() {
        $this->captcha = captcha_src('flat');
    }

    public function render() {
        return view('livewire.captcha');
    }


}
