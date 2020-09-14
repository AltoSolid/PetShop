<?php

//Autor: Juan Felipe Londoño Gaviria and Felipe Ríos López
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
        $request->validate([
            "name" => "required",
            "category" => "required|in:Feeding,Accessories,Medicines",
            "detail" => "required",
            "price" => "required|numeric|gt:0"
        ]);
        Product::create($request->only(["name", "category", "detail", "price"]));

        return back()->with('success', 'The product has been created successfully!');
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
        //$quantity = $request->session()->get("products");
        //dd($quantity);   //To see how do it get the quantity     
        $data = []; //to be sent to the view
        $quantity = $request->quantity;
        $products = $request->session()->get("products");
        $products[$id] = $quantity;
        $request->session()->put('products', $products);
        return back();
    }


    public function removeCart(Request $request)
    {
        $request->session()->forget('products');
        return redirect()->route('product.show');
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
            return view('product.cart')->with("data", $data); //return view product cart?
        }
        return redirect()->route('product.show');
    }


    public function buy(Request $request)
    {
        $order = new Order();
        $order->setPrice("0");
        $order->setOrderDate("2020-02-12");
        $order->save();
        $totalPrice = 0;
        $products = $request->session()->get("products");
        if ($products) {
            $keys = array_keys($products);
            for ($i = 0; $i < count($keys); $i++) {
                $item = new Item();
                $item->setQuantity($products[$keys[$i]]);
                $item->setProductId($keys[$i]);
                $item->setOrderId($keys[$i]);
                $item->save();
                $actualProduct = Product::find($keys[$i]);
                $totalPrice = $totalPrice + $actualProduct->getPrice()*$products[$keys[$i]];
            }
        }
    }
}
