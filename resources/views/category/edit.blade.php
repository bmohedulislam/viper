@extends('layouts.app')
@section('breadcrumb')
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header bg-primary">
                    Edit Category {{ $category->category_name }}
                </div>
                <div class="card-body">
                    <form action="{{ route('category.update',$category->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')
                        <div class="form-group">
                        <label for="exampleInputEmail1">Status</label>
                       <select name="status" class="form-control">
                        <option value="show"{{ ($category->status == 'show')? 'selected':''}}>show</option>
                        <option value="hide"{{ ($category->status == 'hide')? 'selected':''}}>hide</option>
                       </select>
                        <div class="form-group">
                        <label for="exampleInputEmail1">Category Name</label>
                        <input type="text" class="form-control" placeholder="Enter name" name="category_name" value="{{ $category->category_name }}">
                        </div>
                        <div class="form-group">
                        <label for="exampleInputEmail1">Category Tagline</label>
                        <input type="text" class="form-control" placeholder="Enter name" name="category_tagline" value="{{ $category->category_tagline }}">
                        </div>
                        <div class="form-group">
                        <label for="exampleInputEmail1">Old Category Photo</label>
                        <br>
                        <img width="100" src="{{ asset('uploads/category_photos').'/'.$category->category_photo }}" alt="">
                        </div>
                        <div class="form-group">
                        <label for="exampleInputEmail1">New Category Photo</label>
                        <input type="file" class="form-control" name="new_category_photo">
                        </div>
                        <button type="submit" class="btn btn-primary">Add {{ $category->category_name }} Category</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

