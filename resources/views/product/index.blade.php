@extends('layouts.app')
@section('breadcrumb')
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header bg-secendary">
                    Add New Category
                </div>
                <div class="card-body">
                    <table class="table table-border">
                        <thead class="thead-inverse">
                            <tr>
                                <th>Product Name</th>
                                <th>Product Price</th>
                                {{-- <th>Action</th> --}}
                            </tr>
                            </thead>
                            <tbody>
                                @forelse ($products as $product)
                                <tr>
                                    <td>{{ $product->product_name }}</td>
                                    <td>{{ $product->product_price }}</td>
                                    {{-- <td>{{ $category->status }}</td>
                                    <td>{{ $category->category_tagline }}</td>
                                    <td>
                                        <img width="100" src="{{ asset('uploads/category_photos').'/'.$category->category_photo }}" alt="Not Found">
                                    </td>
                                    <td>
                                        <a href="{{ route('category.show',$category->id) }}" class="btn btn-sm btn-warning">Show</a>
                                        <a href="{{ route('category.edit',$category->id) }}" class="btn btn-sm btn-info">Edit</a>
                                        <form action="{{ route('category.destroy',$category->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-danger">Delete</button>
                                        </form>

                                    </td>
                                </tr> --}}
                                @empty
                                <tr class="text-danger text-center">
                                    <td colspan="50">No data to Show</td>
                                </tr>
                                @endforelse
                            </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

