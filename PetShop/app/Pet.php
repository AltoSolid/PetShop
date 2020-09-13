<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pet extends Model
{
    //Atributes id, petname, typeAnimal, medicalHistory, raceAnimal, available, genre, age

    protected $fillable = ['petName', 'typeAnimal', "medicalHistory", "raceAnimal", "available", "genre", "age"];

    public function getId()
    {
        return $this->attributes['id'];
    }


    public function setId($id)
    {
        $this->attributes['id'] = $id;
    }


    public function getPetName()
    {
        return $this->attributes['petName'];
    }


    public function setPetName($petName)
    {
        $this->attributes['petName'] = $petName;
    }


    public function gettypeAnimal()
    {
        return $this->attributes['typeAnimal'];
    }


    public function settypeAnimal($typeAnimal)
    {
        $this->attributes['typeAnimal'] = $typeAnimal;
    }


    public function getmedicalHistory()
    {
        return $this->attributes['medicalHistory'];
    }


    public function setmedicalHistory($medicalHistory)
    {
        $this->attributes['medicalHistory'] = $medicalHistory;
    }


    public function getraceAnimal()
    {
        return $this->attributes['raceAnimal'];
    }


    public function setraceAnimal($raceAnimal)
    {
        $this->attributes['raceAnimal'] = $raceAnimal;
    }


    public function getavailable()
    {
        return $this->attributes['available'];
    }


    public function setavailable($available)
    {
        $this->attributes['available'] = $available;
    }


    public function getgenre()
    {
        return $this->attributes['genre'];
    }


    public function setgenre($genre)
    {
        $this->attributes['genre'] = $genre;
    }


    public function getage()
    {
        return $this->attributes['age'];
    }


    public function setage($age)
    {
        $this->attributes['age'] = $age;
    }


    public function users()
    {
        return $this->belongsToMany('App\User');
    }

    
}
