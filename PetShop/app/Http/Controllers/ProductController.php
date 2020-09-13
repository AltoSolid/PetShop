<?php

//Autor: Juan Felipe Londoño Gaviria
namespace App\Http\Controllers;
use App\Product;
use App\Order;
use App\Item;
use Illuminate\Http\Request;
class ProductController extends Controller
{

    
    public function show()
    {
        $data = []; //to be sent to the view

        $data["title"] = "Show Product";
        $data["product"] = Product::all();
        return view('product.show')->with("data",$data);
    }


    public function create()
    {
        $data = []; //to be sent to the view
        $data["title"] = "Create product";
        $data["product"] = Product::all();

        return view('product.create')->with("data",$data);
    }


    public function save(Request $request)
    {
        $request->validate([
            "name" => "required",
            "category" => "required|in:Feeding,Accessories,Medicines",
            "detail" => "required",
            "price" => "required|numeric|gt:0"
        ]);
        Product::create($request->only(["name","category","detail","price"]));

        return back()->with('success','The product has been created successfully!');
    }


    public function showxId($id)
    {
        $data = []; //to be sent to the view
        $product = Product::findOrFail($id);
        $data["title"] = $product->getName();
        $data["product"] = $product;
 
        return view('product.showId')->with("data",$data);
    }


    public function delete($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();
        return redirect()->route('product.show');

    }

}
