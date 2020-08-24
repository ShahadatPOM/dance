@extends('layouts.backend.master')
@section('base.title', 'Role List')
@section('master.content')

<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Admin</a></li>
        <li class="breadcrumb-item"><a href="#">Role</a></li>
        <li class="breadcrumb-item active" aria-current="page">Index</li>
    </ol>
</nav>
<div class="row">
    <div class="card col-12">
        <div class="card-header">
            <h4 style="display: inline">All Roles</h4>
            <a class="btn btn-sm btn-info m-1" href="{{ route('role.create') }}">Add New</a>
        </div>
        <div class="card-body">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr style="text-align: center">
                        <th>ID</th>
                        <th>Role</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($roles as $role)
                    <tr style="text-align: center">
                        <td>{{ $role->id }}</td>
                        <td>{{ $role->role }}</td>
                        <td>
                            <a class="btn btn-sm btn-warning" href="{{ route('role.edit', $role->id) }}"><i class="fa fa-pencil-square-o"></i></a>
                            <a class="btn btn-sm btn-danger" onclick="alert('yo')" href="{{ route('role.destroy', $role->id) }}"><i class="fa fa-trash-o"></i></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
