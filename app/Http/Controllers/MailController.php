<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\TestMail;

class MailController extends Controller
{
    public function sendEmail() {
        $details = [
            'title' => 'MovieLo website',
            'body' => 'There is your password - AVPS812S'
        ];

        Mail::to("littlenurdaulet@gmail.com")->send(new TestMail($details));
        return "Email Sent!";
    }
}
