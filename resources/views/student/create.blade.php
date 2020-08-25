@extends('layouts.backend.master')
@section('base.title', 'Create Student');
@section('master.content')
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Admin</a></li>
        <li class="breadcrumb-item"><a href="#">Student</a></li>
        <li class="breadcrumb-item active" aria-current="page">Create</li>
    </ol>
</nav>
<div class="row">
    <div class="card col-12">
        <div class="card-header">
            <h4 style="display: inline">Create Student</h4>
            <a class="btn btn-sm btn-info m-1" href="{{ route('student.index') }}">All Student</a>
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
                            <label for="role_id">User Role</label>
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
                            <label for="status">Status</label>
                            <select class="form-control" name="status">
                                <option value=selected>Select Status</option>
                                <option value="1">Active</option>
                                <option value="0">In-Active</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="ed_school_id">School of Education</label>
                            <select class="form-control" name="ed_school_id">
                                <option value=selected>Select School</option>
                                <option value="1">school-1</option>
                                <option value="0">school-2</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="nok_id">NOK</label>
                            <select class="form-control" name="nok_id">
                                <option value=selected>Select NOK</option>
                                <option value="1">nok-1</option>
                                <option value="0">nok-2</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="surgery_id">Surgery</label>
                            <select class="form-control" name="surgery_id">
                                <option value=selected>Select Surgery</option>
                                <option value="1">Surgery-1</option>
                                <option value="0">Surgery-2</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="image">Image</label><br>
                            <input type="file" name="image">
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Add Student</button>
            </form>
        </div>
    </div>
</div>

@endsection
