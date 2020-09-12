@extends('layouts.master')

@section("title", $data["title"])

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ $data["product"]["name"] }}</div>

                <div class="card-body">
                    <b>Name:</b> {{ $data["product"]["name"] }}<br />
                    <b>Category:</b> {{ $data["product"]["category"] }}<br />
                    <b>Details:</b> {{ $data["product"]["detail"] }}<br />
                    <b>Price:</b> {{ $data["product"]["price"] }}  pesos<br /><br />
                    <br>
                    <br>
                    <center><a href="{{route('product.show')}}">BACK</a><br><a href="{{route('product.delete', $data["product"]->getId())}}" >DELETE</a></center>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
