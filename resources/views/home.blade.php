@extends('layouts.app')

@section('breadcrumb')
<div class="page-title-box">
    <h4 class="page-title">Home </h4>
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>

    </ol>
</div>
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="alert alert-success">
                hello! You are
                @if (Auth::user()->role == 1)
                    Customer
                @else
                    Admin
                @endif
            </div>
        </div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Dashbord
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-sm">
                            <tr>
                                <td>Login Id:</td>
                                <td>{{ Auth::id() }}</td>
                            </tr>
                            <tr>
                                <td>Login Name</td>
                                <td>{{ Auth::user()->name }}</td>
                            </tr>
                            <tr>
                                <td>Login Email</td>
                                <td>{{ Auth::user()->email }}</td>
                            </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
