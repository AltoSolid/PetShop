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
    //---------------------pet name---------------------
    public function getPetName()
    {
        return $this->attributes['petName'];
    }

    public function setPetName($petName)
    {
        $this->attributes['petName'] = $petName;
    }
    //--------------------- type of animal ---------------------
    public function gettypeAnimal()
    {
        return $this->attributes['typeAnimal'];
    }

    public function settypeAnimal($typeAnimal)
    {
        $this->attributes['typeAnimal'] = $typeAnimal;
    }
    //----------------------- medial history -------------------
    public function getmedicalHistory()
    {
        return $this->attributes['medicalHistory'];
    }

    public function setmedicalHistory($medicalHistory)
    {
        $this->attributes['medicalHistory'] = $medicalHistory;
    }
    //-----------------------race of animal-------------------
    public function getraceAnimal()
    {
        return $this->attributes['raceAnimal'];
    }

    public function setraceAnimal($raceAnimal)
    {
        $this->attributes['raceAnimal'] = $raceAnimal;
    }
    //----------------------- available to adopt -------------------
    public function getavailable()
    {
        return $this->attributes['available'];
    }

    public function setavailable($available)
    {
        $this->attributes['available'] = $available;
    }
    //-------------------------genre -----------------
    public function getgenre()
    {
        return $this->attributes['genre'];
    }

    public function setgenre($genre)
    {
        $this->attributes['genre'] = $genre;
    }
    //-----------------------age -------------------
    public function getage()
    {
        return $this->attributes['age'];
    }

    public function setage($age)
    {
        $this->attributes['age'] = $age;
    }
}
