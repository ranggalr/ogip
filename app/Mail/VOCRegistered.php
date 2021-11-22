<?php

namespace App\Mail;

use App\Models\VOC;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class VOCRegistered extends Mailable
{
    use Queueable, SerializesModels;

    public $voc;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(VOC $voc)
    {
        $this->voc = $voc;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.voc-email')
                    ->subject('VOC OGIP 2022');
    }
}
