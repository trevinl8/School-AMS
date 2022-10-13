@extends('layouts.moe_admin')

@section('content')
<div class="container">
    <form action="{{ route('users.store') }}" method="POST">
    {{ csrf_field() }}
    <div class="row">
       <div class="col-md-6">
        <h3>Create New User</h3>
       </div>
       <div class="col-md-6">
        <input type="submit" class="btn btn-primary float-md-start mx-1 float-md-end" value="Create User">
       </div>
    </div>
    <div class="row">
        <div class="my-3">
        <div class="card shadow mb-4">
        <div class="card-body">
            <div class="row">
                <div class="col-md-4">
                    <div class="mb-3">
                        <label for="fullname" class="form-label">Full Name</label>
                        <input type="text" class="form-control" id="fullname" name="fullname" placeholder="John Doe">
                    </div>
                    <div class="mb-3">
                        <label for="organization" class="form-label">Organization</label>
                        <select class="form-select form-select" aria-label=".form-select" id="organization" name="organization">
                            <option>Select organization</option>
                            @foreach($teams as $team)
                            <option value="{{ $team->name }}">{{ $team->display_name }}</option>
                            @endforeach
                          </select>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="mb-3">
                        <label for="designation" class="form-label">Designation</label>
                        <input type="text" class="form-control" id="designation" name="designation" placeholder="Principal">
                    </div>
                    <div class="mb-3">
                        <label for="organization" class="form-label">User Role</label>
                        <select class="form-select form-select" aria-label=".form-select" id="organization" name="organization">
                            <option>Select Role</option>
                            <option value="1">{{ $team->display_name }}</option>
                          </select>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="mb-3">
                        <label for="contact_email" class="form-label">Email Address</label>
                        <input type="email" class="form-control" id="contact_email" name="contact_email" placeholder="alias@domain.com">
                    </div>
                    <div class="mb-3">
                        <label for="contact_number" class="form-label">Contact Number</label>
                        <input type="text" class="form-control" id="contact_number" name="contact_number" placeholder="+94112XXXXXX">
                    </div>
                </div>
            </div>
            <div class="mt-2">
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                            <label class="form-check-label" for="flexRadioDefault1">
                              Set System Generated Password
                            </label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                            <label class="form-check-label" for="flexRadioDefault2">
                              Set Password Manually
                            </label>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="mb-3">
                            <input type="text" class="form-control form-control-lg" id="password" name="password" placeholder="Enter Password Manually">
                        </div>
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
