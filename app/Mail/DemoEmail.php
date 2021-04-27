<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class DemoEmail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this ->demo =$demo;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('amatterassu@icloud.com')
        ->view('mails.demo')
        ->text('mails.demo_plain')
        ->with(
            [
                'testVarOne' => '1',
                'testVarTwo' => '3',
            ]);
    }

}
