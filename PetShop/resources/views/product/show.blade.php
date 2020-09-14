@extends('layouts.master')

@section("title", $data["title"])

@section('content')
<div class="container">
    <div class="column">
        <a  href="{{ route('product.removeCart') }}">
            Remove Cart
        </a>
    </div>
    <div class="column">
        <a href="{{ route('product.showCart') }}">
            See cart
        </a>
    </div>
    <div class="row p-5">
        <div class="col-md-12">
            <ul id="errors">

                @foreach($data["product"] as $product)
                <!--<li>{{ $product->getId() }} - {{ $product->getName() }} - {{$product->getCategory()}}: {{ $product->getPrice() }} pesos</li>-->
                <a href="{{route('product.showInfo', $product->getId())}}">
                    <li>{{$product->getId()}} - {{ $product->getName() }} </li>
                </a>
                @endforeach


            </ul>
        </div>
    </div>
</div>
@endsection