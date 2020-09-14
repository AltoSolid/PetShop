@extends('layouts.master')

@section("title", $data["title"])

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ $data["product"]["name"] }}</div>

                <div class="card-body">
                    <b>{{__('information.product.showId.name')}}</b> {{ $data["product"]["name"] }}<br />
                    <b>{{__('information.product.showId.category')}}</b> {{ $data["product"]["category"] }}<br />
                    <b>{{__('information.product.showId.details')}}</b> {{ $data["product"]["detail"] }}<br />
                    <b>{{__('information.product.showId.price')}}</b> {{ $data["product"]["price"] }} pesos<br /><br />
                    <br>
                    <br>
                    <center><a href="{{route('product.show')}}">{{__('information.product.showId.backButton')}}</a><br>
                        <a href="{{route('product.delete', $data["product"]->getId())}}">
                            {{__('information.product.showId.deleteButton')}}
                        </a></center>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection