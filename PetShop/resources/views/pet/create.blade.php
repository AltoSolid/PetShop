<!-- Author: Santiago Hincapié Murillo-->
@extends('layouts.master')
@section("title", $data["title"])
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        @include('util.message')
            <div class="card">
                <div class="card-header">{{__('information.pet.createPet.petTitle')}}</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('pet.save') }}">
                        @csrf
                        <p class="info"> {{__('information.pet.createPet.petPetition')}} <br></p>
                        <input type="text" placeholder="{{__('information.pet.petInfo.petName')}}" name="petName" value="{{ old('petName') }}" class="form" />
                        <input type="text" placeholder="{{__('information.pet.petInfo.typeAnimal')}}" name="typeAnimal" value="{{ old('typeAnimal') }}" class="form" /> <br>
                        <input type="text" placeholder="{{__('information.pet.petInfo.medicalHistory')}}" name="medicalHistory" value="{{ old('medicalHistory') }}" class="form" />
                        <input type="text" placeholder="{{__('information.pet.petInfo.raceAnimal')}}" name="raceAnimal" value="{{ old('raceAnimal') }}" class="form" />

                        <p class="info">{{__('information.pet.createPet.petAdopt')}}</p>
                        <input type="text" placeholder="{{__('information.pet.petInfo.yesNo')}}" name="available" value="{{ old('available') }}" class="form" />

                        <p class="info">{{__('information.pet.createPet.petGenre')}}</p>
                        <input type="text" placeholder="{{__('information.pet.petInfo.genre2')}}" name="genre" value="{{ old('genre') }}" class="form" />
                        <input type="text" placeholder="{{__('information.pet.petInfo.age')}}" name="age" value="{{ old('age') }}" class="form" />
                        <hr>
                        <p class="info">{{__('information.pet.petInfo.choosePhoto')}}</p>
                        <input type="file" placeholder="image" name="image" value="{{ old('image') }}" class="form" />
                        <hr>
                        <input type="submit" value="{{__('information.meeting.send')}}" class="btn button_form" />
                    </form>
                    <br>
                    <input type="submit" onclick="location='{{ route('home.index') }}'" value="{{__('information.button.return')}}" class="btn button_form"/>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection