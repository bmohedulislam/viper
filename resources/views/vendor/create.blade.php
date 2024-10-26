@extends('layouts.app')
@section('breadcrumb')
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header bg-primary">
                    Add New Category
                </div>
                <div class="card-body">
                    <form action="{{ route('vendor.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                        <label for="exampleInputEmail1">Vendor Name</label>
                        <input type="text" class="form-control" placeholder="Enter vendor name" name="vendor_name">
                        </div>
                        <div class="form-group">
                        <label for="exampleInputEmail1">Vendor Email</label>
                        <input type="email" class="form-control" placeholder="Enter vendor email" name="vendor_email">
                        </div>
                        <div class="form-group">
                        <label for="exampleInputEmail1">Vendor Phone Number</label>
                        <input type="text" class="form-control" placeholder="Enter vendor phone number" name="vendor_phone_number">
                        </div>
                        <div class="form-group">
                        <label for="exampleInputEmail1">Vendor Address</label>
                        <input type="text" class="form-control" placeholder="Enter vendor address" name="vendor_address">
                        </div>

                        <button type="submit" class="btn btn-primary">Add New Vendor</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


