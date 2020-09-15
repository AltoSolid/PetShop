<?php
//Autor : Felipe Ríos López
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

        Mail::to('virtualpetshopmail@gmail.com')->send(new Email($data));
    }
}
