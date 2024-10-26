@extends('layouts.app')

@section('breadcrumb')
<div class="page-title-box">
    <h4 class="page-title">Profile</h4>
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
        <li class="breadcrumb-item active">Profile</li>
    </ol>
</div>
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Change Your Name
                </div>
                <div class="card-body">
                   @if (session('success'))
                     <div class="alert alert-info">
                        {{ session('success') }}
                    </div>
                   @endif
                    <form action="{{ route('profile.namechange') }}" method="post">
                        @csrf
                        <div class="form-group">
                          <label>Name</label>
                          <input type="text" name="name" class="form-control" value="{{ Auth::user()->name }}">
                        </div>
                        @error('name')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                        <div class="form-group mt-3">
                          <button class="btn btn-primary btn-sm">Change name</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="card mt-2">
                <div class="card-header">
                    Change Your Photo
                </div>
                <div class="card-body">
                     @if (session('duita'))
                     <div class="alert alert-info">
                        {{ session('duita') }}
                    </div>
                   @endif
                    @if (session('photo_success'))
                     <div class="alert alert-info">
                        {{ session('photo_success') }}
                    </div>
                   @endif
                    <div class="row">
                        <div class="col-lg-12 text-center">
                             <img width="150px" class="" src="{{ asset('uploads/profile_photos').'/'.Auth::user()->profile_photo }}" alt="Card image cap">
                        </div>
                    </div>
                    <form action="{{ route('profile.photochange') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                          <label>New Photo</label>
                          <input type="file" name="new_profile_photo" class="form-control" accept=".jpg,.png">
                        </div>
                        @error('new_profile_photo')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                        <div class="form-group mt-3">
                          <button class="btn btn-primary btn-sm">Change Your Photo</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
         <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Change Your Password
                </div>
                <div class="card-body">
                     @if (session('success_p'))
                        <div class="alert alert-info">
                            {{ session('success_p') }}
                        </div>
                    @endif
                     {{-- @if ($errors->any())
                        <div class="alert alert-danger">
                            @foreach ($errors->all() as $error )
                                <li>{{ $error }}</li>
                            @endforeach
                        </div>
                    @endif --}}
                    <form action="{{ route('profile.passwordchange') }}" method="post">
                        @csrf
                        <div class="form-group">
                          <label>Old Password</label>
                          <input type="password" name="old_password" class="form-control">
                        </div>
                        <div class="form-group">
                          <label>Password</label>
                          <input type="password" name="password" class="form-control">
                        </div>
                        <div class="form-group">
                          <label>Conform Password</label>
                          <input type="password" name="conform_password" class="form-control">
                        </div>
                        <div class="form-group mt-3">
                          <button class="btn btn-primary btn-sm">Change Password</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
