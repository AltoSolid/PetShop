<?php

//Autor : Felipe Ríos López
namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Order;

class Item extends Model
{
    //attributes id, product_id, order_id, quantity created_at, updated_at

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
        return $this->attributes['order_id'];
    }

    public function setOrderId($id)
    {
        $this->attributes['order_id'] = $id;
    }

    public function order(){
        return $this->hasOne(Order::class);
    }

}