@extends('layouts.applic')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-2"></div>
        <div class="col-md-8" align="center">
            <p class="h1">Find the Best School Near You</p>
            <input class="form-control form-control-lg mt-2" type="text" placeholder="Enter your Address Here" aria-label=".form-control-lg example">
            <button type="button" class="btn btn-primary btn-lg mt-4">Lookup</button>
        </div>
        <div class="col-md-2"></div>
    </div>
</div>
@endsection
