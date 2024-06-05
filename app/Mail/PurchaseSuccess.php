<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class PurchaseSuccess extends Mailable
{
    use Queueable, SerializesModels;

    public $atlet;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($atlet)
    {
        $this->atlet = $atlet;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('email.purchase_success')
            ->subject('Pembelian Langganan Berhasil');
    }
}
