<?php

//Autor: Santiago Hincapie Murillo
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pet;

class PetController extends Controller
{
    public function create()
    {
        $data = [];
        $data["title"] = "Create Pet";
        $data["pets"] = Pet::all();
        return view('pet.create')->with("data", $data);
    }


    public function show()
    {
        $data = []; //to be sent to the view

        $pet = Pet::all();

        //$data["title"] = $pet->getPetName();
        $data["pets"] = $pet;
        return view('pet.show')->with("data", $data);
    }


    public function petInfo($id)
    {
        $data = []; //to be sent to the view
        $pet = Pet::findOrFail($id);
        $data["pets"] = $pet;

        $data["title"] = $pet->getPetName();
        return view('pet.petInfo')->with("data", $data);
    }


    public function delete($id)
    {
        $pet = Pet::findOrFail($id);
        $pet->delete();

        return redirect()->route('pet.show');
    }


    public function save(Request $request)
    {
        Pet::validate($request);
        Pet::create($request->only(["petName", "typeAnimal", "typeAnimal", "medicalHistory", "raceAnimal", "available", "genre", "age","image"]));

        return back()->with(__('information.message.messageSuccess'), __('information.pet.success'));
    }

    
}
