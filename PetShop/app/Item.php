<?php

namespace App;

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



}
