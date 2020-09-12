<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{

    protected $fillable = ['orderDate','price'];


    public function getOrderDate()
    {
        return $this->attributes['orderDate'];
    }


    public function setOrderDate($orderDate)
    {
        $this->attributes['orderDate'] = $orderDate;
    }


    public function getPrice()
    {
        return $this->attributes['price'];
    }


    public function setPrice($price)
    {
        $this->attributes['price'] = $price;
    }



}
