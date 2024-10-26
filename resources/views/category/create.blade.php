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
                    <form action="{{ route('category.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                        <label for="exampleInputEmail1">Category Name</label>
                        <input type="text" class="form-control" placeholder="Enter name" name="category_name">
                        </div>
                        <div class="form-group">
                        <label for="exampleInputEmail1">Category Tagline</label>
                        <input type="text" class="form-control" placeholder="Enter name" name="category_tagline">
                        </div>
                        <div class="form-group">
                        <label for="exampleInputEmail1">Category Photo</label>
                        <input type="file" class="form-control" name="category_photo">
                        </div>
                        <button type="submit" class="btn btn-primary">Add New Category</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

