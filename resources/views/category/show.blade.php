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
                   <table class="table table-bordered">
                    <tbody>
                        <tr>
                            <td>Category Name</td>
                            <td>{{  $category->category_name }}</td>
                        </tr>
                        <tr>
                            <td>Category Tagline</td>
                            <td>{{ $category->category_tagline }}</td>
                        </tr>
                        <tr>
                            <td>Category Photo</td>
                            <td><img width="100" src="{{ asset('uploads/category_photos').'/'.$category->category_photo }}" alt=""></td>
                        </tr>
                    </tbody>
                   </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


