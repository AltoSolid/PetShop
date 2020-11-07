<?php

//Author: Santiago Hincapié Murillo
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home.index');
    }


    public function contact()	
    {	
        return view('home.contact');	
    }	


    public function changeLang($locale)
    {
        Session::put('applocale', $locale);
        return redirect()->route('home.index');
    }
}
