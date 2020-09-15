@extends('layouts.master')

@section("title", $data["title"])

@section('content')

<div class="row p-5">
    
    <div class="col-md-12">
        @include('util.message')
        <ul id="errors">

            @foreach($data["products"] as $product)
            <li>
                Name: {{ $product->getName() }}, <br>
                Price: {{ $product->getPrice() }} <br>
                Quantity: {{ Session::get('products')[$product->getId()] }} <br>
            </li>
            @endforeach
            <br>
            <form action="{{ route('payment.show') }}" method="POST">
                @csrf
                <button class="button_personalized" type="submit"> BUY </button>
            </form>
            <br>
            <form action="{{ route('product.show') }}" method="GET">
                @csrf
                <button class="button_personalized" type="submit"> BACK </button>
            </form>            
        </ul>
    </div>
</div>
</div>
@endsection