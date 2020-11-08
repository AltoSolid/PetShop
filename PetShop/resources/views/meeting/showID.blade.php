<!-- Autor: Felipe Ríos López -->
@extends('layouts.master')

@section("title", $data["title"])

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ $data["title"] }}</div>
                <div class="card-body">
                    <div class="row p-5">
                        <div class="col-md-12">
                            <ul id="errors">
                                @foreach($data["meetinguser"] as $meeting)
                                <b> {{__('information.meeting.info.details')}} {{ $meeting->getDetails()}} </b>
                                <br>
                                {{__('information.meeting.info.date')}} {{ $meeting->getDate()}}
                                <br />
                                {{__('information.meeting.info.creation')}} {{ $meeting->getCreation()}} 
                                <br />
                                {{__('information.meeting.info.image')}} {{ $meeting->getImage()}}
                            </ul>
                            @endforeach
                        </div>
                        <form method="GET" action="{{ route('meeting.destroy', $data['meeting']->getId())  }}">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-primary"> {{__('information.meeting.showId.buttonDelete')}} </button>
                        </form>
                        
                        <form method="GET" action="{{ route('meeting.assist', $data['meeting']->getId()) }}" >
                            @csrf
                            <input type="submit" value={{__('information.assist')}} class="btn btn-primary">
                        </form>                   
                    </div>
                    
                    <div>
                        <H2>{{__('information.meeting.showId.participants')}}</H2>
                        @foreach($data["meetinguser"] as $mu)
                        <div>
                            @foreach($mu["users"] as $user)
                            <br>- {{ $user->name }}
                            @endforeach
                        </div>    
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection