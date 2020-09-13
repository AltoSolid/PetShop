<?php
//Autor : Felipe Ríos López
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Meeting;
class MeetingController extends Controller
{
    public function showAll(){
        $data = []; //to be sent to the view
        $data["title"] = "All meeting";
        $data["meeting"] = Meeting::all()->sortBy("id");
        return view('meeting.show')->with("data",$data);
    }


    public function showID($id)
    {
        $data = []; 
        $meeting = Meeting::findOrFail($id);
        
        $data["title"]       = $meeting->getPlace();
        $data["meeting"]     = $meeting;  
        $data["meetinguser"] = Meeting::with('users')->get()->where('id',$id); //The pivot table, method users in MEETING  
        return view('meeting.showID')->with("data",$data);
    }


    public function create()
    {
        $data = []; //to be sent to the view
        $data["title"] = "Create meeting";
        $data["meeting"] = Meeting::all();
        return view('meeting.create')->with("data",$data);
    }


    public function save(Request $request)
    {
        $request->validate([
            "place" => "required",        
            "date" => "required|date",    
            "details" => "required"
            ]);
            Meeting::create($request->only(["place","date","details"]));
            return back()->with('success','The meeting has been created successfully!');        
    }


    public function destroy($id)
    {
        $deleted = Meeting::find($id);
        $deleted->delete();
        return redirect()->route('meeting.show');

    }

    
}
