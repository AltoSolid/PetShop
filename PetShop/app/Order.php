<?php

//Autor: Juan Felipe Londoño Gaviria and Felipe Ríos López
namespace App;

use Illuminate\Database\Eloquent\Model;

use App\OrdersProducts;

class Order extends Model
{

    protected $fillable = ['orderDate','price'];

    public function getId()
    {
        return $this->attributes['id'];
    }

    public function setId($id)
    {
        $this->attributes['id']= $id;
    }


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

    public function ordersproducts(){
        return $this->hasMany(OrdersProducts::class);
    }

    public function payment(){
        return $this->hasOne(Payment::class);
    }    

}
