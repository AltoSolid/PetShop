<?php

//Autor: Juan Felipe Londoño Gaviria
namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Product;
use App\Order;

class OrdersProducts extends Model
{
    //attributes id, products_id, orders_id, quantity created_at, updated_at

    public function getId()
    {
        return $this->attributes['id'];
    }

    public function setId($id)
    {
        $this->attributes['id'] = $id;
    }

    public function getQuantity()
    {
        return $this->attributes['quantity'];
    }

    public function setQuantity($q)
    {
        $this->attributes['quantity'] = $q;
    }

    public function getProductId()
    {
        return $this->attributes['products_id'];
    }

    public function setProductId($id)
    {
        $this->attributes['products_id'] = $id;
    }

    public function getOrderId()
    {
        return $this->attributes['orders_id'];
    }

    public function setOrderId($id)
    {
        $this->attributes['orders_id'] = $id;
    }

    public function product(){
        return $this->belongsTo(Product::class);
    }

    public function order(){
        return $this->belongsTo(Order::class);
    }

}