@extends('layouts.backend.master')
@section('base.title', 'Edit Role');
@section('master.content')
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Admin</a></li>
        <li class="breadcrumb-item"><a href="#">Role</a></li>
        <li class="breadcrumb-item active" aria-current="page">Edit</li>
    </ol>
</nav>
<div class="row">
    <div class="card col-10 offset-1">
        <div class="card-header">
            <h4 style="display: inline">Edit Role</h4>
            <a class="btn btn-sm btn-info m-1" href="{{ route('role.index') }}">All Role</a>
        </div>
        <div class="card-body">
            <form action="{{ route('role.update', $role->id) }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="role">Role Name</label>
                    <input type="text" class="form-control" name="role" value="{{ $role->role }}">
                </div>
                <button type="submit" class="btn btn-primary">Update Role</button>
            </form>
        </div>
    </div>
</div>

@endsection
