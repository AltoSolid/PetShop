@extends('layouts.master')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{__('information.contactInformation.questions')}}</div>
                <div class="card-body">
                    <p>{{__('information.contactInformation.contactName')}}</p> <hr>
                    <p>{{__('information.contactInformation.petshopAddress')}}</p> <hr>
                    <p>{{__('information.contactInformation.petshopPhone')}}</p> <hr>
                    <p>{{__('information.contactInformation.contactEmail')}}</p> <hr>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection