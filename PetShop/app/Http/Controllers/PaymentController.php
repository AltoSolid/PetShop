<?php

//Felipe Ríos López
namespace App\Http\Controllers;

use App\Order;
use Illuminate\Http\Request;


class PaymentController extends Controller
{


    public function payment(Request $request)
    {
        //Here is the code of saving...
            return redirect()->route('product.payment');
    
    }
}
