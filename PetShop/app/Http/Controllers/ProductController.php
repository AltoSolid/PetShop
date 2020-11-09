<?php

//Autor: Juan Felipe Londoño Gaviria and Felipe Ríos López
namespace App\Http\Controllers;

use App\Product;
use App\Order;
use Illuminate\Http\Request;


class ProductController extends Controller
{


    public function show()
    {
        $data = []; //to be sent to the view

        $data["title"] = "Show Product";
        $data["product"] = Product::all();
        return view('product.show')->with("data", $data);
    }


    public function create()
    {
        $data = []; //to be sent to the view
        $data["title"] = "Create product";
        $data["product"] = Product::all();

        return view('product.create')->with("data", $data);
    }


    public function save(Request $request)
    {
        Product::validate($request);
        Product::create($request->only(["name", "category", "detail", "price"]));
        return back()->with(__('information.message.messageSuccess'), __('information.product.createProduct.created'));
    }


    public function showxId($id)
    {
        $data = []; //to be sent to the view
        $product = Product::findOrFail($id);
        $data["title"] = $product->getName();
        $data["product"] = $product;
        return view('product.showId')->with("data", $data);
    }


    public function delete($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();
        return redirect()->route('product.show');
    }


    public function addToCart($id, Request $request)
    {
        $quantity = $request->quantity;
        $products = $request->session()->get("products");
        $products[$id] = $quantity;
        $request->session()->put('products', $products);
        return back()->with(__('information.message.messageSuccess'),__('information.product.createProduct.added'));
    }


    public function removeCart(Request $request)
    {
        $request->session()->forget('products');
        return back()->with(__('information.message.messageSuccess'), __('information.product.removed'));
    }


    public function showCart(Request $request)
    {
        $data = [];
        $data["title"] = "Cart";
        $products = $request->session()->get('products');
        if ($products) {
            $keys = array_keys($products);
            $productsModels = Product::find($keys);
            $data["products"] = $productsModels;
            return view('product.cart')->with("data", $data);
        }
        return redirect()->route('product.show');
    }


    public function viewOrders()
    {
        $userId = auth()->user()->id; 
        $data = []; //to be sent to the view
        $data["userOrders"] = Order::where("user_id", "=", $userId)->get();        
        return view('product.userOrders')->with("data",$data);        
    }
}
