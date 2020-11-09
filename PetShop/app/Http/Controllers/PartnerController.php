<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PartnerController extends Controller
{
    
    function list()
    {
        
        $data = Http::get('http://ec2-184-72-114-127.compute-1.amazonaws.com/public/api/v2/meetings')->json();
        return view('partner.show', ['data'=>$data]);
    }
}
