<!-- Author: Juan Felipe Londoño-->
@extends('layouts.master')

@section("title", $data["title"])

@section('content')
<div class="container">
    <div class="row p-5">
        <div class="col-md-12">
            <ul id="errors">
                
                @foreach($data["orders"] as $order)               
                    <li>{{$order->getId()}}  - {{ $order->getOrderDate() }}  - {{ $order->getPrice() }}</li>          
                @endforeach


            </ul>
        </div>
    </div>
</div>
@endsection