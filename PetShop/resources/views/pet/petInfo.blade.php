<!-- Author: Santiago Hincapié Murillo-->
@extends('layouts.master')

@section("title", $data["title"])

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ $data["title"] }} {{__('information.pet.petInfo.information')}}</div>

                <div class="card-body">
                    <p class="info">{{__('information.pet.petInfo.petName')}} {{ $data["pets"]["petName"]}}</p>
                    <p class="info">{{__('information.pet.petInfo.typeAnimal')}} {{ $data["pets"]["typeAnimal"]}}</p>
                    <p class="info">{{__('information.pet.petInfo.medicalHistory')}} {{ $data["pets"]["medicalHistory"]}}</p>
                    <p class="info">{{__('information.pet.petInfo.raceAnimal')}} {{ $data["pets"]["raceAnimal"]}}</p>
                    <p class="info">{{__('information.pet.petInfo.available')}} {{ $data["pets"]["available"]}}</p>
                    <p class="info">{{__('information.pet.petInfo.genre')}} {{ $data["pets"]["genre"]}}</p>
                    <p class="info">{{__('information.pet.petInfo.age')}} {{ $data["pets"]["age"]}}</p>
                    <ul>
                    </ul>
                </div>
                <input type="submit" onclick="location='{{ route('pet.show') }}'" value="{{__('information.pet.petInfo.backButton')}}" class="btn button_form"/>
            </div>
        </div>
    </div>
</div>
@endsection