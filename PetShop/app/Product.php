<?php

//Autor: Juan Felipe Londoño Gaviria
namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Http\Request;
class Product extends Model
{
    //attributes id, name, price, created_at, updated_at
    protected $fillable = ['name', 'category', "detail", "price"];
    public static function validate(Request $request){
        $request->validate([
            "name" => "required",
            "category" => "required|in:Feeding,Accessories,Medicines",
            "detail" => "required",
            "price" => "required|numeric|gt:0"
        ]);
    }

    public function getId()
    {
        return $this->attributes['id'];
    }

    public function setId($id)
    {
        $this->attributes['id'] = $id;
    }

    public function getName()
    {
        return $this->attributes['name'];
    }

    public function setName($name)
    {
        $this->attributes['name'] = $name;
    }

    public function getCategory()
    {
        return $this->attributes['category'];
    }

    public function setCategory($category)
    {
        $this->attributes['category'] = $category;
    }

    public function getDetail($detail)
    {
        return $this->attributes['detail'];
    }

    public function setDetail($detail)
    {
        $this->attributes['detail'] = $detail;
    }

    public function getPrice()
    {
        return $this->attributes['price'];
    }

    public function setPrice($price)
    {
        $this->attributes['price'] = $price;
    }

    public function orders()
    {
        return $this->belongsToMany(Product::class, 'orders_products',
         'products_id', 'orders_id')
         ->withPivot(['quantity'])
         ->withTimestamps();

    }
}
