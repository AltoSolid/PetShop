<!-- Author: Juan Felipe Londoño-->
@extends('layouts.master')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    {{__('information.indexWelcome')}}
                </div>
                
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <center><img src="storage/logo.jpg" alt="Logo" class="css-class" alt="alt text">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection