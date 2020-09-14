@extends('layouts.master')

@section("title", $data["title"])

@section('content')

<div class="row p-5">
    <div class="col-md-12">
        <ul id="errors">

            @foreach($data["products"] as $product)
            <li> Name: {{ $product->getName() }}, Price: {{ $product->getPrice() }}
                - Quantity: {{ Session::get('products')[$product->getId()] }} </li>
            @endforeach
            PRECIO Total
            <form action="{{ route('product.buy') }}" method="POST">
            @csrf
            <button type="submit"> BUY </button>
            </form>
        </ul>
    </div>
</div>
</div>
@endsection