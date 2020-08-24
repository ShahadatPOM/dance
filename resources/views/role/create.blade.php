@extends('layouts.backend.master')
@section('base.title', 'Create Role');
@section('master.content')
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Admin</a></li>
        <li class="breadcrumb-item"><a href="#">Role</a></li>
        <li class="breadcrumb-item active" aria-current="page">Create</li>
    </ol>
</nav>
<div class="row">
    <div class="card col-10 offset-1">
        <div class="card-header">
            <h4 style="display: inline">Create Role</h4>
            <a class="btn btn-sm btn-info m-1" href="{{ route('role.index') }}">All Role</a>
        </div>
        <div class="card-body">
            <form action="{{ route('role.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="role">Role Name</label>
                    <input type="text" class="form-control" name="role" placeholder="Enter Role Name">
                </div>
                <button type="submit" class="btn btn-primary">Add Role</button>
            </form>
        </div>
    </div>
</div>

@endsection
