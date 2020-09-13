<?php
//Autor : Felipe Ríos López
namespace App;

use Illuminate\Database\Eloquent\Model;

class Meeting extends Model
{

    protected $table = "meeting_users";


    public function getId()
    {
        return $this->attributes['id'];
    }


    public function setId($id)
    {
        $this->attributes['id'] = $id;
    }

    public function getMeetingId()
    {
        return $this->attributes['meeting_id'];
    }
    public function setMeetingId($id)
    {
        $this->attributes['meeting_id'] = $id;
    }
    public function getUserId()
    {
        return $this->attributes['user_id'];
    }
    public function setUserId($id)
    {
        $this->attributes['user_id'] = $id;
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function meeting()
    {
        return $this->belongsTo(Meeting::class);
    }
    //public function user() 
    //{
    //   return $this->belongsToMany('App\User');
    //}


    //public function meeting()
    //{
    //   return $this->belongsToMany('App\Meeting');
    //}


}
