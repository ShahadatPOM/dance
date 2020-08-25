@extends('layouts.backend.base')
@section('base.title', 'Registration Student');
@section('base.content')
<div class="row">
<div class="card col-10 offset-1 mt-2">
    <div class="card-header">
        <h3 style="color: #2AA876; text-transform: uppercase; text-align: center">Student Registration Form</h3>
    </div>
<div class="card-body">
    <form action="{{ route('student.store') }}" method="POST" enctype="multipart/form-data"> 
        @csrf
        <div class="row">
            <div class="col-6">
                <div class="form-group">
                    <label for="first_name">First Name</label>
                    <input type="text" class="form-control" name="first_name" placeholder="Enter First Name">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" name="email" placeholder="Enter E-mail Address">
                </div>
                <div class="form-group">
                    <label for="dob ">Date of Birth</label>
                    <input type="date" class="form-control" name="dob" placeholder="Enter Date of Birth">
                </div>
                <div class="form-group">
                    <label for="mobile">Mobile</label>
                    <input type="text" class="form-control" name="mobile" placeholder="Enter Mobile No">
                </div>
                <div class="form-group">
                    <label for="allergies_med">Allergies</label>
                    <input type="text" class="form-control" name="allergies_med" placeholder="Enter Allergies Name">
                </div>
                <div class="form-group">
                    <label for="registration_source">Registration Source</label>
                    <input type="text" class="form-control" name="registration_source" placeholder="Enter Registration Source">
                </div>
                <div class="form-group">
                    <label for="date_terms_agreed">Date Terms Agreed</label>
                    <input type="date" class="form-control" name="date_terms_agreed" placeholder="Enter Date Terms Agreed">
                </div>
                <div class="form-group">
                    <label for="date_joined">Date Joined</label>
                    <input type="date" class="form-control" name="date_joined" placeholder="Enter Date Joined">
                </div>
                <div class="form-group">
                    <label for="role_id">User Type</label>
                    <select class="form-control" name="role_id">
                        <option value=selected>Select User Role</option>
                        @foreach($roles as $role)
                        <option value="{{ $role->id }}">{{ $role->role }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <label for="last_name">Last Name</label>
                    <input type="text" class="form-control" name="last_name" placeholder="Enter Last Name">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" name="password" placeholder="Enter password">
                </div>
                <div class="form-group">
                    <label for="age">Age</label>
                    <input type="number" class="form-control" name="age" placeholder="Enter Age">
                </div>
                <div class="form-group">
                    <label for="telephone">Telephone</label>
                    <input type="text" class="form-control" name="telephone" placeholder="Enter Telephone No">
                </div>
                
                <div class="form-group">
                    <label for="ed_school_id">School of Education</label>
                    <select class="form-control" name="ed_school_id">
                        <option value=selected>Select School</option>
                        <option value="1">school-1</option>
                        <option value="2">school-2</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="nok_id">NOK</label>
                    <select class="form-control" name="nok_id">
                        <option value=selected>Select NOK</option>
                        <option value="1">nok-1</option>
                        <option value="2">nok-2</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="surgery_id">Surgery</label>
                    <select class="form-control" name="surgery_id">
                        <option value=selected>Select Surgery</option>
                        <option value="1">Surgery-1</option>
                        <option value="2">Surgery-2</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="image">Image</label><br>
                    <input type="file" name="image">
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-info">Submit</button>
        <span class="text-center">I already have a membership</span><a href="{{ route('user.login') }}"><b> Sign In Here</b></a>
    </form>
</div>
</div>
</div>
@endsection