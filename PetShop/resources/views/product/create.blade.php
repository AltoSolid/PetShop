@extends('layouts.master')

@section("title", $data["title"])

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @include('util.message')
            <div class="card">
                <div class="card-header">Create Product</div>
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
                    <br><label for="category">Choose a category:</label>
                    <select id="category" name="category">
                        <option value="Feeding">Feeding</option>
                        <option value="Medicines">Medicines</option>
                        <option value="Accessories">Accessories</option>
                    </select>
                    <br>
                    <br><input type="text" placeholder="Details" name="detail" value="{{ old('detail') }}" />
                    <br>
                    <br><input type="text" placeholder="Price" name="price" value="{{ old('price') }}" />
                    <br>
                    <br><input type="submit" value="Send" /></center>
                </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection