@extends('layouts.app_auth')

@section('auth_form')
<div class="card-box p-5">
    <h2 class="text-uppercase text-center pb-4">
        <a href="index.html" class="text-success">
                <span><img src="{{ asset('dashbord/assets/images/logo.png') }}" alt="" height="26"></span>
        </a>
    </h2>

    @if ($errors->any)

    @endif
    <form action="{{ route('register') }}" method="POST">
        @csrf
        <div class="form-group row m-b-20">
            <div class="col-12">
                <label for="username">Full Name <span class="text-danger">*</span></label>
                <input class="form-control" type="text" id="username" required="" placeholder="Michael Zenaty" name="name">
            </div>
        </div>
        <div class="form-group row m-b-20">
            <div class="col-12">
                <label for="username">Phone Number</label>
                <input class="form-control" type="number" id="username" placeholder="01736248547" name="phone_number">
            </div>
        </div>

        <div class="form-group row m-b-20">
            <div class="col-12">
                <label for="emailaddress">Email address <span class="text-danger">*</span></label>
                <input class="form-control" type="email" id="emailaddress" required="" placeholder="john@deo.com" name="email">
            </div>
        </div>

        <div class="form-group row m-b-20">
            <div class="col-12">
                <label for="password">Password <span class="text-danger">*</span></label>
                <input class="form-control" type="password" required="" id="password" placeholder="Enter your password" name="password">
            </div>
        </div>
        <div class="form-group row m-b-20">
            <div class="col-12">
                <label for="password">Confirm Password <span class="text-danger">*</span></label>
                <input class="form-control" type="password" required="" id="password" placeholder="Enter your confirm password" name="password_confirmation">
            </div>
        </div>

        <div class="form-group row text-center m-t-10">
            <div class="col-12">
                <button class="btn btn-block btn-custom waves-effect waves-light" type="submit">Register</button>
            </div>
        </div>

    </form>

    <div class="row m-t-50">
        <div class="col-sm-12 text-center">
            <p class="text-muted">Already have an account?  <a href="{{ route('login') }}" class="text-dark m-l-5"><b>Log In</b></a></p>
        </div>
    </div>

</div>

@endsection
