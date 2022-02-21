<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Mail\RegistoMail;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Mail;
use Laravel\Socialite\Facades\Socialite;


class RegisterController extends Controller
{

    private function getSuccessMsg(): string {
        switch (App::getLocale()) {
            case 'pt':
                return 'Registo realizado com sucesso. Logo entraremos em contato.';

            case 'es':
                return 'Registro exitoso. Nos pondremos en contacto pronto.';

            default:
                return 'Successful registration. We\'ll be in touch soon.';
        }
    }

    public function redirectToProvider()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleProviderCallback()
    {
        $user = Socialite::driver('google')->user();

        Mail::to($user->email)->send(new RegistoMail($user->email));

        return redirect()->route('registo')->with('successMsg', $this->getSuccessMsg());
    }
}
