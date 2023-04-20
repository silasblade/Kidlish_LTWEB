<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Mail\sendMail;
class MailController extends Controller
{
    public function index(){
        $mailData = [
            'title' => 'Test Mail',
            'body' => 'Hello form khai',
        ];

        Mail::to('trankhai091@gmail.com')->send(new sendMail($mailData));
        dd('Email send successfully.');
    }
}
