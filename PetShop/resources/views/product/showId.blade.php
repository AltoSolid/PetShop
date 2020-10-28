<!-- Autor: Felipe Ríos López -->
@extends('layouts.master')

@section("title", $data["title"])

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        @include('util.message')        
            <div class="card">
                <div class="card-header">{{ $data["title"] }}</div>

                <div class="card-body">
                    <div class="row">
                        <div class="column">
                            <b>{{__('information.product.info.name')}}</b> {{ $data["product"]["name"] }}<br />
                            <b>{{__('information.product.info.category')}}</b> {{ $data["product"]["category"] }}<br />
                            <b>{{__('information.product.info.details')}}</b> {{ $data["product"]["detail"] }}<br />
                            <b>{{__('information.product.info.price')}}</b> {{ $data["product"]["price"] }} {{__('information.product.info.currency')}}<br /><br />
                        </div>
                        <div class="column">
                            <center><img src="storage/logo.jpg" alt="Logo" class="css-class" alt="alt text">
                        </div>


                        <form action="{{ route('product.addToCart',['id'=> $data['product']->getId()]) }}" method="POST">
                            @csrf
                            <div class="form-row">
                                <div class="col-md-12">
                                    <input type="number" placeholder="Quantity" class="form-control" name="quantity" min="0"  style="width: 80px;">
                                </div>
                                <div class="form-group col-md-12">
                                    <button type="submit" class="btn btn-outline-success">Add </button>
                                </div>
                            </div>
                        </form>


                    </div>
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