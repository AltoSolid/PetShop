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
                    @foreach($data["pets"] as $pet)
                        @if($loop->iteration <=2) <li>
                        <b><a href="{{ route('pet.petInfo', $pet->getId()) }}">{{ $pet->getId() }} - {{ $pet->getPetName() }}</a>
                            <form action="{{ route('pet.delete',$pet->getId()) }}">
                                <input type="submit" value="{{__('information.pet.deleteButton')}}" class="btn button_form" />
                            </form>
                        </b>
                        <br>
                        </li>
                        @else
                        <li>
                            <a href="{{ route('pet.petInfo', $pet->getId()) }}">{{ $pet->getId() }} - {{ $pet->getPetName() }}</a>
                            <form action="{{ route('pet.delete',$pet->getId()) }}">
                                <input type="submit" value="{{__('information.pet.deleteButton')}}" class="btn button_form" />
                            </form>
                        </li>
                        @endif
                    @endforeach

                </div>
            </div>
        </div>
    </div>
</div>

@endsection