<?php
//Autor : Felipe Ríos López
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MeetingUser;
class MeetingUserController extends Controller
{
    public function show()  {
        $data = []; //to be sent to the view
        $data["meetingUser"] = MeetingUser::all()->sortBy("id");
        return view('meeting.show')->with("data",$data);        
    }
}
