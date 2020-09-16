<!-- Author: Santiago Hincapié Murillo-->
@extends('layouts.master')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <p class="info">{{__('information.pet.petShow')}}</p>
                </div>
                <div class="card-body">


                </div>
            </div>
        </div>
    </div>
    <div class="row p-5">
        <div class="col-md-12">
            <ul id="errors">
                @foreach($data["pets"] as $pet)
                @if($loop->iteration <=2) <li>
                    <b><a href="{{ route('pet.petInfo', $pet->getId()) }}">{{ $pet->getId() }}</a> - {{ $pet->getPetName() }}
                        <form action="{{ route('pet.delete',$pet->getId()) }}">
                            <input type="submit" value="{{__('information.pet.deleteButton')}}" class="btn button_form" />
                        </form>
                    </b>
                    <br>
                    </li>
                    @else
                    <li>
                        <a href="{{ route('pet.petInfo', $pet->getId()) }}">{{ $pet->getId() }}</a> - {{ $pet->getPetName() }}
                        <form action="{{ route('pet.delete',$pet->getId()) }}">
                            <input type="submit" value="{{__('information.pet.deleteButton')}}" class="btn button_form" />
                        </form>
                    </li>
                    @endif
                    @endforeach
            </ul>
        </div>
    </div>

</div>

@endsection