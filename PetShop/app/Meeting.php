<?php
//Autor : Felipe Ríos López
namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Meeting extends Model
{

    //attributes id, name, price, created_at, updated_at
    protected $fillable = ['place', 'date', 'details', 'image'];
    protected $table = 'meeting';
    public static function validate(Request $request){
        $request->validate([
            "place" => "required",        
            "date" => "required|date",    
            "details" => "required",
            "image" => "required"
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


    public function getDate()
    {
        return $this->attributes['date'];
    }


    public function setDate($date)

    {
        $this->attributes['date'] = $date;
    }


    public function getPlace()
    {
        return $this->attributes['place'];
    }


    public function setPlace($place)
    {
        $this->attributes['place'] = $place;
    }


    public function getDetails()
    {
        return $this->attributes['details'];
    }


    public function setDetails($details)
    {
        $this->attributes['details'] = $details;
    }

    public function getImage()
    {
        return $this->attributes['image'];
    }

    public function setImage($image)
    {
        $this->attributes['image'] = $image;
    }

    public function getCreation()
    {
        return $this->attributes['created_at'];
    }

    public function users()
    {
        return $this->belongsToMany(User::class,'meeting_user')->withTimestamps();
    }
}
