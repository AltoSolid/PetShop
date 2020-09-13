<?php

//Autor: Juan Felipe Londoño Gaviria
namespace App\Http\Controllers;
use App\Item;
use Illuminate\Http\Request;
class ItemController extends Controller
{


    public function show()
    {
        $data = []; //to be sent to the view

        $data["title"] = "Show Item";
        $data["items"] = Item::all();
        return view('item.show')->with("data",$data);
    }


    public function create()
    {
        $data = []; //to be sent to the view
        $data["title"] = "Create Item";
        $data["items"] = Item::all();

        return view('item.create')->with("data",$data);
    }


    public function save(Request $request)
    {
        $request->validate([
            "quantity" => "required|numeric|gt:0",
            "subtotal" => "required|numeric|gt:0",
         
        ]);
        Item::create($request->only(["orderDate", "price"]));

        return back()->with('success','Se ha creado correctamente!');
    }


    public function delete($id)
    {
        $item = Item::findOrFail($id);
        $item->delete();
        return redirect()->route('item.show');

    }

}
