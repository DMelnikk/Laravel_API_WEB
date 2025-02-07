@extends('admin.layouts.admin')
@section('title','Products')

@section('admin_content')
    <div class="container mt-3">
        @if (session()->has('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif
        @if (session()->has('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
    <div class="card mb-4">
        <div class="card-header">
            <a href="{{route('products.create')}}" class="card-title btn btn-primary">Add product</a>
        </div> <!-- /.card-header -->
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th style="width: 10px">id</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th class="text-center" style="width: 10px">Price</th>
                    <th class="text-center">Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach($products as $product)
                <tr class="align-middle">
                    <td>{{$product->id}}</td>
                    <td>{{Str::limit($product->name, 15)}}</td>
                    <td>
                        {{ Str::limit($product->description, 45) }}
                    </td>
                    <td>{{$product->price}}</td>
                    <td class="text-center  d-flex gap-2">
                        <button class="btn btn-info"><a class="btn-sm mr-1" style="text-decoration: none;" href="{{route('products.show',['product'=>$product->id])}}">Show</a></button>
                      <button class="btn btn-warning"><a class="btn-sm mr-1" style="text-decoration: none;" href="{{route('products.edit',['product'=>$product->id])}}">Edit</a></button>
                        <form action="{{route('products.destroy',['product'=>$product->id])}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div> <!-- /.card-body -->
        <div class="card-footer clearfix">
            <ul class="pagination pagination-sm m-0 float-end">
                {{$products->links()}}
            </ul>
        </div>
    </div>
    </div>
@endsection
