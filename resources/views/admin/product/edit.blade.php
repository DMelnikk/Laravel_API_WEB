@extends('admin.layouts.admin')

@section('title','Edit Product')

@section('admin_content')
    <div class="container mt-3">
        <div class="col-md-12">
            <div class="card card-primary card-outline mb-4"> <!--begin::Header-->
                <div class="card-header">
                    <div class="card-title">Edit product</div>
                </div> <!--end::Header--> <!--begin::Form-->


                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul class="list-unstyled">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{route('products.update',['product'=>$product->id])}}" method="post"> <!--begin::Body-->
                    @csrf
                    @method('PUT')
                    <div class="card-body">
                        <div class="mb-3"> <label for="name" class="form-label">Name</label> <input type="text" class="form-control" name="name" id="name" placeholder="Name" value="{{$product->name}}" >
                        </div>
                        <div class="mb-3"> <label for="description" class="form-label">Description</label> <textarea type="text" class="form-control" name="description" id="description" placeholder="Description">{{$product->description}}</textarea>
                        </div>
                        <div class="mb-3"> <label for="name" class="form-label">Price</label> <input type="number" step="any" class="form-control" name="price" id="price" placeholder="Price" value="{{$product->price}}" >
                        </div>
                    </div> <!--end::Body--> <!--begin::Footer-->
                    <div class="card-footer"> <button type="submit" class="btn btn-primary">Submit</button> </div> <!--end::Footer-->
                </form> <!--end::Form-->
            </div>
        </div>
    </div>

@endsection

