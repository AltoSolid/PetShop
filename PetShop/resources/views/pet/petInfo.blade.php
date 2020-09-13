@extends('layouts.master')

@section("title", $data["title"])

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ $data["title"] }} Information:</div>

                <div class="card-body">
                    <p class="info">Pet name: {{ $data["pets"]["petName"]}}</p>
                    <p class="info">type of Animal: {{ $data["pets"]["typeAnimal"]}}</p>
                    <p class="info">Medical History: {{ $data["pets"]["medicalHistory"]}}</p>
                    <p class="info">Race of Animal: {{ $data["pets"]["raceAnimal"]}}</p>
                    <p class="info">Available to adopt?: {{ $data["pets"]["available"]}}</p>
                    <p class="info">Genre: {{ $data["pets"]["genre"]}}</p>
                    <p class="info">Age: {{ $data["pets"]["age"]}}</p>
                    <ul>
                    </ul>
                </div>
                <input type="submit" onclick="location='/pet/show'" value="Return to all the Pets registered" class="btn button_form"/>
            </div>
        </div>
    </div>
</div>
@endsection