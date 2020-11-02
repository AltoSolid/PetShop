<?php

//Autor: Felipe Ríos López
namespace App\Http\Controllers;

use App\Order;
use App\Product;
use App\OrdersProducts;
use Illuminate\Http\Request;


class PaymentController extends Controller
{


    public function show(Request $request)
    {
        $userID = auth()->user()->id; 
        $order = new Order(); 
        $order->setOrderDate(now());
        $order->setPrice("0"); 
        $order->setUserID($userID); 
        $order->save();
        $totalPrice = 0;
        $products = $request->session()->get("products");
        if ($products) {
            $keys = array_keys($products);
            for ($i = 0; $i < count($keys); $i++) {
                $item = new OrdersProducts();
                $item->setOrderId($order->getId());  //There is an error here
                $item->setProductId($keys[$i]);
                $item->setQuantity($products[$keys[$i]]);                
                $item->save();
                $actualProduct = Product::find($keys[$i]);
                $totalPrice = $totalPrice + $actualProduct->getPrice() * $products[$keys[$i]];
            }
            $order->setOrderDate(now());
            $order->setPrice($totalPrice);
            $order->setUserID($userID);   
            $order->save();

            $request->session()->forget('products');
            return back()->with(__('information.message.messageSuccess'),__('information.product.success'));
        }
    }
}
