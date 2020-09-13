<?php

//Autor: Santiago Hincapie Murillo
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function changePassword($newPassword)
    {
        $this->attributes['password'] = $newPassword;
    }


    public function updateCreditCard($newCreditCard)
    {
        $this->attributes['creditCard'] = $newCreditCard;
    }


    public function updateAddress($newAddress)
    {
        $this->attributes['address'] = $newAddress;
    }
}
