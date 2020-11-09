<?php
//Autor : Felipe Ríos López
namespace App\Http\Controllers;
use App\Mail\Email;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function sendEmail(){
        $data = [
            'title' => "TITLE",
            'body' => "BODY",
        ];

        Mail::to("{{ __('information.email.email')}}")->send(new Email($data));
    }
}
