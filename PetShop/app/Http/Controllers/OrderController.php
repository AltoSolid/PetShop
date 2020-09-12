<?php

namespace App\Http\Controllers;
use App\Order;
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
        Item::create($request->only(["orderDate", "price"]));

        return back()->with('success','Se ha creado correctamente!');
    }


    public function delete($id)
    {
        $order = Order::findOrFail($id);
        $order->delete();
        return redirect()->route('order.show');

    }

}
