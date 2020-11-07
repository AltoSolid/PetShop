<?php

namespace App\Http\Controllers\Api;
use App\Http\Resources\MeetingResource;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Meeting;

class MeetingApi extends Controller
{
    public function index()
    {
        return MeetingResource::collection(Meeting::all());
    }

    public function show($id)
    {
        return new MeetingResource(Meeting::findOrFail($id));
    }
}
