@extends('layouts.backend.base')
@section('base.title', 'Login || Coacha')
@section('base.content')
<div class="content">
    <div class="row">
        <div class="col-2 offset-4 mt-5">
            <div class="register-box">
                <div class="register-logo">
                    <a href="#"><b>Dance</b>School</a>
                </div>

                <div class="card">
                    <div class="card-body register-card-body">
                        <p class="login-box-msg">Register a new membership</p>

                        <form action="{{ route('register') }}" method="post">
                            @csrf
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" name="name" value="{{ old('name') }}" required placeholder="Full name">
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <span class="fas fa-user"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="input-group mb-3">
                                <input type="email" class="form-control" name="email"  value="{{ old('email') }}" required  placeholder="Email">
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <span class="fas fa-envelope"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="input-group mb-3">
                                <input type="password" class="form-control" name="password" required placeholder="Password">
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <span class="fas fa-lock"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="input-group mb-3">
                                <input type="password" class="form-control" name="password_confirmation" required placeholder="Retype password">
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <span class="fas fa-lock"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-8">

                                </div>
                                <!-- /.col -->
                                <div class="col-4">
                                    <button type="submit" class="btn btn-primary btn-block">Register</button>
                                </div>
                                <!-- /.col -->
                            </div>
                        </form>

                        <span class="text-center">I already have a membership</span><a
                            href="{{ route('user.login') }}"><b> Sign In Here</b></a>
                    </div>
                    <!-- /.form-box -->
                </div><!-- /.card -->
            </div>
        </div>
    </div>
</div>
@endsection
