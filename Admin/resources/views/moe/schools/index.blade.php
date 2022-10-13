@extends('layouts.moe_admin')

@section('content')
<div class="container">
    <div class="row">
       <div class="col-md-6">
        <h3>School List</h3>
       </div>
       <div class="col-md-6">
       </div>
    </div>
    <div class="row">
        <div class="my-3">
        <div class="card shadow mb-4">
        <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>#ID</th>
                        <th>School Code</th>
                        <th>School Name</th>
                        <th>Contact Email</th>
                        <th>Contact Number</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($schools as $school)
                    <tr>
                        <td>{{ $school->id }}</td>
                        <td>{{ $school->name }}</td>
                        <td>{{ $school->display_name }}</td>
                        <td>{{ $school->email }}</td>
                        <td>{{ $school->contact }}</td>
                        <td>
                            <button type="button" class="btn btn-warning btn-sm">Edit</button>
                            <button type="button" class="btn btn-info btn-sm">Delete</button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        </div>
        </div>
        </div>
    </div> 
</div>
@endsection