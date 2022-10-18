@extends('layouts.sch_admin')

@section('content')
<div class="container">
    <form action="{{ route('myschool.update', $teams->id) }}" method="POST">
    {{method_field('PUT')}}
    {{ csrf_field() }}
    <div class="row">
       <div class="col-md-6">
        <h3>{{ $teams->display_name }}</h3>
       </div>
       <div class="col-md-6">
        <input type="submit" class="btn btn-primary float-md-start mx-1 float-md-end" value="Update Profile">
       </div>
    </div>
    <div class="row">
        <div class="my-3">
        <div class="card shadow mb-4">
        <div class="card-body">
            <div class="row">
                <div class="col-md-4">
                    <div class="mb-3">
                        <label for="schoolname" class="form-label">Scool Code</label>
                        <input type="text" class="form-control" id="schoolname" name="schoolname" value="{{ $teams->name }}" readonly>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="mb-3">
                        <label for="display_name" class="form-label">Display Name</label>
                        <input type="text" class="form-control" id="display_name" name="display_name" value="{{ $teams->display_name }}" readonly>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="mb-3">
                        <label for="contact_email" class="form-label">Contact Email</label>
                        <input type="email" class="form-control" id="contact_email" name="contact_email" value="{{ $teams->email }}" readonly>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8">
                    <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <textarea class="form-control" id="description" name="description" rows="8">{{ $teams->description }}</textarea>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="mb-3">
                        <label for="contact_number" class="form-label">Contact Number</label>
                        <input type="text" class="form-control" id="contact_number" name="contact_number" value="{{ $teams->contact }}">
                    </div>
                    <div class="mb-3">
                        <label for="school_latitude" class="form-label">Latitude</label>
                        <input type="text" class="form-control" id="school_latitude" name="school_latitude" value="{{ $teams->latitude }}">
                    </div>
                    <div class="mb-3">
                        <label for="school_longtitude" class="form-label">Longtitude</label>
                        <input type="text" class="form-control" id="school_longtitude" name="school_longtitude" value="{{ $teams->longtitude }}">
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
</form>
</div>
@endsection

@section('page-scripts')


@endsection