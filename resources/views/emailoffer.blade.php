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
                    Customer List
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-sm">
                            <tr>
                                <th>Check</th>
                                <th>SL No</th>
                                <th>Customer Name</th>
                                <th>Customer Email</th>
                                <th>Action</th>
                            </tr>
                            <form action="{{ route('checkemailoffer') }}" method="POST">
                             @foreach ($customers as $customer)
                             @csrf
                                <tr>
                                    <td>
                                        <input type="checkbox" class="form-control" name="check[]" value="{{ $customer->id }}">
                                    </td>
                                    <td>{{ $loop->index+1 }}</td>
                                    <td>{{ $customer->name }}</td>
                                    <td>{{ $customer->email }}</td>
                                    <td>
                                        <a href="{{ route('singleemailoffer',$customer->id) }}" class="btn btn-sm btn-success">Send</a>
                                    </td>
                                </tr>
                            @endforeach
                            <tr>
                                <td class="text-center">
                                    <button type="submit" class="btn btn-info">Send Check</button>
                                </td>
                            </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
