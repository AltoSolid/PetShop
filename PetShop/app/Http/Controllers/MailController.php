<?php

namespace App\Http\Controllers;
use App\Mail\Email;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

class MailController extends Controller
{
    public function sendEmail(){
        $data = [
            'title' => "TITLE",
            'body' => "BODY",
        ];
        
        Mail::to('friosl@eafit.edu.co')->send(new Email($data));
    }
}
