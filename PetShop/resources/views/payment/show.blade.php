<!-- Autor: Felipe Ríos López -->
@extends('layouts.master')

@section("title", $data["title"])

@section('content')

<div class="row p-5">
    <div class="col-md-12">
        <ul id="errors">
        {{__('information.payment.pay')}}
        </ul>
    </div>
</div>
</div>
@endsection