@extends('layouts.moe_admin')

@section('content')
<div class="container">
    <form action="{{ route('schools.store') }}" method="POST" enctype="multipart/form-data">
    {{ csrf_field() }}
    <div class="row">
       <div class="col-md-6">
        <h3>Create New School</h3>
       </div>
       <div class="col-md-6">
        <input type="submit" class="btn btn-primary float-md-start mx-1 float-md-end" value="Create School">
       </div>
    </div>
    <div class="row">
        <div class="my-3">
        <div class="card shadow mb-4">
        <div class="card-body">
            <div class="row">
                <div class="col-md-4">
                    <div class="mb-3">
                        <label for="schoolname" class="form-label">Scool Name</label>
                        <input type="text" class="form-control" id="schoolname" name="schoolname" readonly>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="mb-3">
                        <label for="display_name" class="form-label">Display Name</label>
                        <input type="text" class="form-control" id="display_name" name="display_name" onkeypress="copyText(); return true" placeholder="Anuradapura Central College">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="mb-3">
                        <label for="contact_email" class="form-label">Contact Email</label>
                        <input type="email" class="form-control" id="contact_email" name="contact_email" placeholder="alias@domain.com">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8">
                    <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <textarea class="form-control" id="description" name="description" rows="5" placeholder="A short description about your school"></textarea>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="mb-3">
                        <label for="contact_number" class="form-label">Contact Number</label>
                        <input type="text" class="form-control" id="contact_number" name="contact_number" placeholder="+94112XXXXXX">
                    </div>
                    <div class="mb-3">
                        <label for="school_logo" class="form-label">School Logo</label>
                        <input class="form-control" type="file" id="school_logo" name="school_logo" required>
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
<script>
    function copyText()
    {
        var init = document.getElementById("display_name").value;
        var matches = init.match(/\b(\w)/g);
        var schlslug = matches.join('');
        $('#schoolname').val(schlslug);
    }
    
</script>

@endsection