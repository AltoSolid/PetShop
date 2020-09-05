@extends('layouts.master')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Bienvenido a PetShop
                </div>
                <div class="buttons_container">
                    <button class="btn button_form" type="button">
                        <a href=" {{ ('/create') }}">Create a form</a>
                    </button>
                    <button class="btn button_listObj" type="button">
                        <a href=" {{ ('/listObj') }}">List objects</a> 
                </button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection