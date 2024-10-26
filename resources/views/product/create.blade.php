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
                    <form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                        <label for="exampleInputEmail1">Category Name</label>
                            <select name="category_id" class="form-control">
                                <option value="">-Select One-</option>
                                @foreach ($active_categories as $active_category)
                                    <option value="{{ $active_category->id }}">{{ $active_category->category_name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                        <label for="exampleInputEmail1">Product Name</label>
                        <input type="text" class="form-control" placeholder="Enter name" name="product_name">
                        </div>
                        <div class="form-group">
                        <label for="exampleInputEmail1">Product Price</label>
                        <input type="text" class="form-control" placeholder="Enter name" name="product_price">
                        </div>
                        <div class="form-group">
                        <label for="exampleInputEmail1">Product Short Description</label>
                        <textarea name="product_short_description" class="form-control" rows="2"></textarea>
                        </div>
                        <div class="form-group">
                        <label for="exampleInputEmail1">Product Long Deshcription</label>
                        <textarea name="product_long_description" class="form-control" rows="4"></textarea>
                        </div>
                        <div class="form-group">
                        <label for="exampleInputEmail1">Product Code</label>
                        <input type="text" class="form-control" placeholder="Enter name" name="product_code">
                        </div>
                        <div class="form-group">
                        <label for="exampleInputEmail1">Product Photo</label>
                        <input type="file" class="form-control" name="product_photo">
                        </div>
                        <div class="form-group">
                        <label for="exampleInputEmail1">Product Thumbnails</label>
                        <input type="file" class="form-control" name="product_thumbnails[]" multiple>
                        </div>

                        <button type="submit" class="btn btn-primary">Add New Product</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection




