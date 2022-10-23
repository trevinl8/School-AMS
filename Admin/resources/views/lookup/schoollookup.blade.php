@extends('layouts.applic')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-2"></div>
        <div class="col-md-8" align="center">
            <p class="h1">Find the Best School Near You</p>
            <form action="{{ route('lookup.store') }}" method="POST">
            @csrf
                <input class="form-control form-control-lg mt-2" type="text" placeholder="Enter your Address Here" aria-label=".form-control-lg example" id="from_address" name="addressFrom">
                <button type="submit" class="btn btn-primary btn-lg mt-4">Lookup</button>
            </form>
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