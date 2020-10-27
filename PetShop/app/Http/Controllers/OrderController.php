<?php

//Autor: Juan Felipe Londoño Gaviria
namespace App\Http\Controllers;
use App\Product;
use App\Order;
use App\Item;
use Illuminate\Http\Request;
class OrderController extends Controller
{
    public function show()
    {
        $data = []; //to be sent to the view

        $data["title"] = "Show Order";
        $data["orders"] = Order::all();
        return view('order.show')->with("data",$data);
    }


    public function create()
    {
        $data = []; //to be sent to the view
        $data["title"] = "Create Order";
        $data["orders"] = Order::all();

        return view('order.create')->with("data",$data);
    }


    public function save(Request $request)
    {
        $request->validate([
            "orderDate" => "required|date",
            "price" => "required|numeric|gt:0",
         
        ]);
        Order::create($request->only(["orderDate", "price"]));

        return back()->with("{{__('information.message.messageSuscess')}}","{{__('information.order.created')}}");
    }


    public function delete($id)
    {
        $order = Order::findOrFail($id);
        $order->delete();
        return redirect()->route('order.show');

    }

}
