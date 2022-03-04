<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SupportMail extends Mailable
{
    use Queueable, SerializesModels;

    private ?string $name;
    private string $username;
    private string $email;
    private string $password;
    private string $country;
    private string $currency;
    private ?string $phone;
    private ?float $credit_limit;


    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(?string $name, string $username, string $email, string $password, string $country, string $currency, ?string $phone, ?float $credit_limit)
    {
        $this->name = $name;
        $this->username = $username;
        $this->email = $email;
        $this->password = $password;
        $this->country = $country;
        $this->currency = $currency;
        $this->phone = $phone;
        $this->credit_limit = $credit_limit;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('MTC Registo')->markdown('mails.support', [
            'name' => $this->name,
            'username' => $this->username,
            'email' => $this->email,
            'password' => $this->password,
            'country' => $this->country,
            'currency' => $this->currency,
            'phone' => $this->phone,
            'credit_limit' => $this->credit_limit,
        ]);
    }
}
