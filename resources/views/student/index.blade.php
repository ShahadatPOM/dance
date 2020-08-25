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
            <h4 style="display: inline">All Student</h4>
            <a class="btn btn-sm btn-info m-1" href="">Add New</a>
        </div>
        <div class="card-body">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr style="text-align: center">
                        <th>ID</th>
                        <th>Name</th>
                        <th>E-mail</th>
                        <th>Mobile</th>
                        <th>date_joined</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($students as $student)
                    <tr style="text-align: center">
                        <td>{{ $student->id }}</td>
                        <td>{{ $student->first_name }}{{$student->last_name}}</td>
                        <td>{{ $student->email }}</td>
                        <td>{{ $student->mobile}}</td>
                        <td>{{ $student->date_joined }}</td>
                        
                        <td>
                        @if($student->status == 0) 
                        <a class="btn btn-sm btn-warning" href="{{ route('student.pending', $student->id) }}"><i class="fa fa-lock"></i></a>
                       @elseif($student->status == 1)
                       <a class="btn btn-sm btn-success" href="{{ route('student.block', $student->id) }}"><i class="fas fa-unlock-alt"></i></a>
                        @endif  
                        </td>
                        <td>
                            <a class="btn btn-sm btn-info" href="{{ route('student.edit', $student->id) }}"><i class="fa fa-eye"></i></a>
                            <a class="btn btn-sm btn-danger" onclick="alert('yo')" href="{{ route('student.destroy', $student->id) }}"><i class="fa fa-trash-o"></i></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
