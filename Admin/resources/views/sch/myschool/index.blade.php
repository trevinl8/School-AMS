@extends('layouts.sch_admin')

@section('content')
<div class="container">
    <div class="row">
       <div class="col-md-6">
        <h3>My School Settings</h3>
       </div>
    </div>
        <!-- Content Row -->
        <div class="row mt-3">
            <div class="container">
                @foreach($teams as $team)
                <div class="card">
                    <div class="card-header">
                      {{ $team->display_name }}
                      <a href="{{route('myschool.edit', $team->id)}}" class="btn btn-warning btn-sm  float-end">Edit School Info</a>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4"></div>
                            <div class="col-md-8">
                                <p class="card-text text-description">{{ $team->description }}</p>
                            </div>
                        </div>
                      
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <!-- Content Row -->
</div>
@endsection
