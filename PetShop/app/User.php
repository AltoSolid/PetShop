<?php

//Autor: Santiago Hincapie Murillo
namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'address', 'password', 'email', 'contact', 'creditCard', 'amount',
        'petList'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

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


    public function getAddress()
    {
        return $this->attributes['address'];
    }


    public function setAddress($address)
    {
        $this->attributes['address'] = $address;
    }


    private function getPassword()
    {
        return $this->attributes['password'];
    }


    private function setPassword($password)
    {
        $this->attributes['password'] = $password;
    }


    private function getEmail()
    {
        return $this->attributes['email'];
    }


    private function setEmail($email)
    {
        $this->attributes['email'] = $email;
    }


    public function getContact()
    {
        return $this->attributes['contact'];
    }


    public function setContact($contact)
    {
        $this->attributes['contact'] = $contact;
    }


    public function getCreditCard()
    {
        return $this->attributes['creditCard'];
    }


    public function setCreditCard($creditCard)
    {
        $this->attributes['creditCard'] = $creditCard;
    }


    public function getAmount()
    {
        return $this->attributes['amount'];
    }


    public function setAmount($amount)
    {
        $this->attributes['amount'] = $amount;
    }


    public function getPetList()
    {
        return $this->attributes['petList'];
    }


    public function setPetList($petList)
    {
        $this->attributes['petList'] = $petList;
    }
}
