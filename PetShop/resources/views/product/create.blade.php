@extends('layouts.master')

@section("title", $data["title"])

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @include('util.message')
            <div class="card">
                <div class="card-header">{{__('information.product.createProduct.title')}}</div>
                <div class="card-body">
                @if($errors->any())
                <ul id="errors">
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
                @endif

                <form method="POST" action="{{ route('product.save') }}">
                    @csrf
                    <center>
                    <br><input type="text" placeholder="Name" name="name" value="{{ old('name') }}" />
                    <br>
                    <br><label for="category">{{__('information.product.createProduct.chooseCategory')}}</label>
                    <select id="category" name="category">
                        <option value="Feeding">{{__('information.product.createProduct.feeding')}}</option>
                        <option value="Medicines">{{__('information.product.createProduct.medicines')}}</option>
                        <option value="Accessories">{{__('information.product.createProduct.accesories')}}</option>
                    </select>
                    <br>
                    <br><input type="text" placeholder="Details" name="detail" value="{{ old('detail') }}" />
                    <br>
                    <br><input type="text" placeholder="Price" name="price" value="{{ old('price') }}" />
                    <br>
                    <br><input type="submit" value="Send" class="btn button_form"/></center>
                </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection