@extends('layouts.moe_admin')

@section('content')
<div class="container">
    <div class="row">
       <div class="col-md-6">
        <h3>Users List</h3>
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
                        <th>Name</th>
                        <th>Email</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td align="center">
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