@extends('layouts.applic')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-2"></div>
        <div class="col-md-8" align="center">
            <p class="h1">Find the Best School Near You</p>
                <a href="{{ route('lookup.index') }}"class="btn btn-primary btn-lg mt-4">Search</a>
        
        </div>
        <div class="col-md-2"></div>
    </div>
</div>
@endsection
@section('page-scripts')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<!-- Google Maps JavaScript library -->
<script async
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDXeHsDPi4-Oh5T0nQIvmvw595FgurbwTA&libraries=places&callback=initMap">
</script>

<script>
var searchInput = 'from_address';
 
 $(document).ready(function () {
  var autocomplete;
  autocomplete = new google.maps.places.Autocomplete((document.getElementById(searchInput)), {
   types: ['geocode'],
   componentRestrictions: {
    country: "lk"
   }
  });
   
  google.maps.event.addListener(autocomplete, 'place_changed', function () {
   var near_place = autocomplete.getPlace();
  });
 });
</script>
@endsection