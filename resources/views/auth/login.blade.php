@extends('layouts.app_auth')

@section('auth_form')
 <div class="card-box p-5">
    <h2 class="text-uppercase text-center pb-4">
        <a href="index.html" class="text-success">
            <span><img src="{{ asset('dashbord/assets/images/logo.png') }}" alt="" height="26"></span>
        </a>
    </h2>

    <form class="" action="{{ route('login') }}" method="POST">
        @csrf
        <div class="form-group m-b-20 row">
            <div class="col-12">
                <label for="emailaddress">Email address</label>
                <input class="form-control" type="email" id="emailaddress" placeholder="Enter your email" name="email" value="ohid@gmail.com">
                @error('email')
                        <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
        </div>

        <div class="form-group row m-b-20">
            <div class="col-12">
                <a href="page-recoverpw.html" class="text-muted pull-right"><small>Forgot your password?</small></a>
                <label for="password">Password</label>
                <input class="form-control" type="password" id="password" placeholder="Enter your password" name="password" value="123456789">
                @error('password')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
        </div>

        <div class="form-group row m-b-20">
            <div class="col-12">

                <div class="checkbox checkbox-custom">
                    <input id="remember" type="checkbox" checked="" name="remember">
                    <label for="remember">
                        Remember me
                    </label>
                </div>

            </div>
        </div>

        <div class="form-group row text-center m-t-10">
            <div class="col-12">
                <button class="btn btn-block btn-custom waves-effect waves-light" type="submit">Log In</button>
            </div>
        </div>

    </form>

    <div class="row m-t-50">
        <div class="col-sm-12 text-center">
            <p class="text-muted">Don't have an account? <a href="{{ route('register') }}" class="text-dark m-l-5"><b>Register</b></a></p>
        </div>
    </div>

</div>
@endsection
