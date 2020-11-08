<!-- Autor: Felipe Ríos López -->
@extends('layouts.master')

@section("title", $data["title"])

@section('content')

<div class="row p-5">
    
    <div class="col-md-12">
        @include('util.message')
        <ul id="errors">

            @foreach($data["products"] as $product)
            <li>
            {{__('information.product.info.name')}} {{ $product->getName() }}, <br>
            {{__('information.product.info.price')}} {{ $product->getPrice() }} <br>
            {{__('information.product.info.quantity')}} {{ Session::get('products')[$product->getId()] }} <br>
            </li>
            @endforeach
            <br>
            <form action="{{ route('payment.show') }}" method="POST">
                @csrf
                <button class="button_personalized" type="submit">  {{__('information.payment.buy') }} </button>
            </form>
            <br>
            <form action="{{ route('product.show') }}" method="GET">
                @csrf
                <button class="button_personalized" type="submit"> {{__('information.payment.back') }} </button>
            </form>                  
        </ul>
    </div>
</div>
</div>
@endsection
