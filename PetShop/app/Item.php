<?php

//Autor: Juan Felipe Londoño Gaviria
namespace App;

use App\Product;
use App\Order;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{

    protected $fillable = ['quantity','subtotal'];


    public function getOrderDate()
    {
        return $this->attributes['quantity'];
    }


    public function setOrderDate($quantity)
    {
        $this->attributes['quantity'] = $quantity;
    }


    public function getPrice()
    {
        return $this->attributes['subtotal'];
    }


    public function setPrice($subtotal)
    {
        $this->attributes['subtotal'] = $subtotal;
    }


   public function getProductId()
    {
        return $this->attributes['product_id'];
    }


    public function setProductId($id)
    {
        $this->attributes['product_id'] = $id;
    }


    public function getOrderId()
    {
        return $this->attributes['order_id'];
    }


    public function setOrderId($id)
    {
        $this->attributes['order_id'] = $id;
    }


    public function product(){
        return $this->belongsTo(Product::class);
    }


    public function order(){
        return $this->belongsTo(Order::class);
    }


}
