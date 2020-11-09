@extends('layouts.master')


@section('content')

<div class="row p-5">
    
    <div class="col-md-12">
        <ul>
            @foreach($data as $item)
                @foreach($item as $it)
                    <li>{{$it['date']}} - {{$it['place']}} - {{$it['details']}}</li>
                @endforeach
            @endforeach
        </ul>

        <form action="{{ route('home.index') }}" method="GET">
            @csrf
            <button class="button_personalized" type="submit"> {{__('information.payment.back') }} </button>
        </form>
    </div>
</div>
@endsection