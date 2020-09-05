@extends('layouts.master')
@section("title", $data["title"])
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        @include('util.message')
            <div class="card">
                <div class="card-header">Pet Information</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('pet.save') }}">
                        @csrf
                        <p class="info"> Please fill all the information below: <br></p>
                        <input type="text" placeholder="Pet name" name="petName" value="{{ old('petName') }}" class="form" />
                        <input type="text" placeholder="type of animal" name="typeAnimal" value="{{ old('typeAnimal') }}" class="form" /> <br>
                        <input type="text" placeholder="Medical History" name="medicalHistory" value="{{ old('medicalHistory') }}" class="form" />
                        <input type="text" placeholder="Race of the animal" name="raceAnimal" value="{{ old('raceAnimal') }}" class="form" />

                        <p class="info">Avaibale to adopt?</p>
                        <input type="text" placeholder="Yes or No" name="available" value="{{ old('available') }}" class="form" />

                        <p class="info">Genre</p>
                        <input type="text" placeholder="Male or female" name="genre" value="{{ old('genre') }}" class="form" />
                        <input type="text" placeholder="Age (in years)" name="age" value="{{ old('age') }}" class="form" />
                        <hr>
                        <input type="submit" value="Send" class="btn button_form" />
                    </form>
                    <br>
                    <input type="submit" onclick="location='/index'" value="Return" class="btn button_form"/>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection