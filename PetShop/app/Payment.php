<?php

//Autor : Felipe Ríos López
namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Order;

class Payment extends Model
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


    public function getOrderId()
    {
        return $this->attributes['orders_id'];
    }

    public function setOrderId($id)
    {
        $this->attributes['orders_id'] = $id;
    }

    public function order(){
        return $this->hasOne(Order::class);
    }

}