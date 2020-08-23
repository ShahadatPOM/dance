@extends('layouts.backend.base')
@section('base.title', 'Login || Coacha')
@section('base.content')
<div class="content">
    <div class="row">
        <div class="col-2 offset-4 mt-5">
            <div class="login-box">
                <div class="login-logo">
                    <a href="#"><b>Coacha</b></a>
                </div>
                <!-- /.login-logo -->
                <div class="card">
                    <div class="card-body login-card-body">
                        <p class="login-box-msg">Sign into your club</p>

                        <form action="../../index3.html" method="post">
                            <div class="input-group mb-3">
                                <input type="email" class="form-control" placeholder="Email">
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <span class="fas fa-envelope"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="input-group mb-3">
                                <input type="password" class="form-control" placeholder="Password">
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <span class="fas fa-lock"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-8">
                                    <div class="icheck-primary">
                                        <input type="checkbox" id="remember">
                                        <p class="mb-1">
                                            <a href="#">Forgot your password?</a>
                                        </p>
                                    </div>
                                </div>
                                <!-- /.col -->
                                <div class="col-4">
                                    <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                                </div>
                                <!-- /.col -->
                            </div>
                        </form>

                        <div class="social-auth-links text-center mb-3">
                            <p>- OR -</p>
                        </div>
                        <p class="mb-0">
                            <span class="text-center">Do not have an account?</span><a href="{{ route('user.registration') }}"><b> Sign Up Here</b></a>
                        </p>
                    </div>
                    <!-- /.login-card-body -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
