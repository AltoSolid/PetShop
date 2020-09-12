<?php
//Autor : Felipe Ríos López
namespace App;
use Illuminate\Database\Eloquent\Model;
class Meeting extends Model
{
    //attributes id, name, price, created_at, updated_at
    //protected $fillable = ['place', 'date','details'];
    public function getId()
    {
        return $this->attributes['id'];
    }


    public function setId($id)
    {
        $this->attributes['id'] = $id;
    }


    public function user() 
    {
        return $this->belongsToMany('App\User');
    }

    
    public function meeting()
    {
        return $this->belongsToMany('App\Meeting');
    }

    
}
