@extends('layouts.master')



@section('content')

<div class="row p-5">
    
    <div class="col-md-12">
        @include('util.message')
        <ul id="errors">
            @foreach($data["userOrders"] as $userOrders)
                <li>{{__('information.order.orderId')}} {{ $userOrders->getId() }} {{__('information.order.orderDate')}} {{ $userOrders->getOrderDate() }} {{__('information.order.price')}} {{ $userOrders->getPrice() }}</li>
            @endforeach                 
        </ul>

        <div class="column">
            <input type="submit" onclick="location='{{ route('product.show') }}'" value="{{__('information.product.showId.backButton')}}" class="btn button_form"/>        </div>
        </div>
    </div>
</div>
@endsection