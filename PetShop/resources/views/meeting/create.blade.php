<!-- Autor: Felipe Ríos López -->
@extends('layouts.master')

@section("title", $data["title"])

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @include('util.message')
            <div class="card">
                <div class="card-header">{{__('information.meeting.create.title')}}</div>
                <div class="card-body">
                    @if($errors->any())
                    <ul id="errors">
                        @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                    @endif

                    <form method="POST" action="{{ route('meeting.save') }}">
                        @csrf
                        <div class="input1">
                            <input type="text" placeholder="{{__('information.meeting.place')}}" name="place" value="{{ old('place') }}" />
                        </div>

                        <div class="input2">
                            <input type="text" autocomplete="off" placeholder="{{__('information.meeting.date')}}" class="date form-control" name="date" value="{{ old('date') }}" />
                        </div>

                        <div class="input3">
                            <input type="text" placeholder="{{__('information.meeting.detail')}}" name="details" value="{{ old('details') }}" />
                        </div>

                        <p class="info">{{__('information.meeting.info.choosePhoto')}}</p>
                        <input type="file" placeholder="{{__('information.meeting.image')}}" name="image" value="{{ old('image') }}" class="form" />
                        <hr>

                        <input type="submit" value="{{__('information.meeting.send')}}" class="btn button_form"/>
                    </form>

                </div>
            </div>
        </div>
    </div>


</div>
@endsection