@extends('layouts.master')

@section("title", $data["title"])

@section('content')

<div class="container">
    @include('util.message')
    @include('cartbar.header')
    <div class="row p-5">
        <div class="col-md-12">
            <ul id="errors">

                @foreach($data["product"] as $product)
                <a href="{{route('product.showInfo', $product->getId())}}">
                    <li>{{$product->getId()}} - {{ $product->getName() }} </li>
                </a>
                @endforeach


            </ul>
        </div>
    </div>
</div>
@endsection