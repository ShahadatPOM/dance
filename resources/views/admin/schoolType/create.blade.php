@extends('layouts.backend.master')
@section('base.title', 'Create School Type')
@section('master.content')
<!-- Content Header (Page header) -->
{{-- <div class="section-header">
    <h1>Create School Type</h1>
    <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="{{ route('admin.dashboard') }}">Dashboard</a></div>
<div class="breadcrumb-item"><a href="{{ route('schoolType.index') }}">School Type List</a></div>
<div class="breadcrumb-item">Create School Type</div>
</div>
</div> --}}
<!-- /.content-header -->

<div class="content">
    <div class="container-fluid mt-5">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <h4>Create School Type</h4>
                            <a href="{{ route('schoolType.index') }}" class="m-1 btn btn-icon btn-left btn-primary"><i
                                    class="fas fa-plus"></i> All School Type</a>
                        </div>

                    </div>
                    <!-- /.card-header -->
                    <div class="card-body p-0">
                        <div class="col-12 col-lg-8 offset-lg-2 col-md-8 offset-md-2 ">
                            <form action="{{ route('schoolType.store') }}" method="post">
                                @csrf
                                <div class="form-group">
                                    <label for="school_type_name">School Type Name</label>
                                    <input type="text" class="form-control" name="school_type_name"
                                        placeholder="Enter School Type Name">
                                </div>
                                <button type="submit" class="btn btn-primary">Add type</button>
                            </form>
                        </div>
                    </div>
                    <!-- /.card-body -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
