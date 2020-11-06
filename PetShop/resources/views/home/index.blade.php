<!-- Author: Juan Felipe Londoño, Felipe Rios-->
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
            <div>
                Ubícanos
            </div>
            <div id='map' style='width: 400px; height: 300px;'></div>
            <script>
                // ADD YOUR ACCESS TOKEN FROM
                // https://account.mapbox.com
                mapboxgl.accessToken = 'pk.eyJ1IjoiZnJpb3NsIiwiYSI6ImNraDZmZ3ZpcTBkNWEyem56a3prZTBhaHYifQ.IUjIA16brdxFQiqkGTIUaw';
                var map = new mapboxgl.Map({
                    container: 'map',
                    style: 'mapbox://styles/mapbox/streets-v11', // stylesheet location
                    center: [-74,5,40], // starting position [lng, lat]
                    zoom: 9 // starting zoom
                });
                var marker = new mapboxgl.Marker()
                .setLngLat([-74,5,40]).addTo(map); //6.151033,-75.615206
            </script>
        </div>
    </div>
</div>
@endsection