<!-- Autor: Felipe Ríos López -->
@extends('layouts.master')

@section("title", $data["title"])

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ $data["title"] }}</div>

                <div class="row p-5">
                    <div class="col-md-12">
                        <ul id="errors">
                            @foreach($data["meeting"] as $meeting)

                            @if($loop->iteration<=2) <b><a href="{{ route('meeting.showID', $meeting->getId()) }}">
                                    <li> {{ $meeting->getId() }} {{__('information.meeting.show.separator')}} {{ $meeting->getPlace() }} {{__('information.meeting.show.date')}} {{ $meeting->getDate() }}</li>
                                </a></b>
                                @else
                                <a href="{{ route('meeting.showID', $meeting->getId()) }}">
                                    <li> {{ $meeting->getId() }} {{__('information.meeting.show.separator')}} {{ $meeting->getPlace() }} {{__('information.meeting.show.date')}} {{ $meeting->getDate() }}</li>
                                </a>
                                @endif
                                <b>{{__('information.meeting.show.details')}}</b><br />
                                {{ $meeting->getDetails() }}<br />
                                <br />
                                @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection