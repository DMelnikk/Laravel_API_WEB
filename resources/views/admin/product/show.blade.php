@extends('admin.layouts.admin')

@section('title','Show Product')

@section('admin_content')
    <div class="container mt-3">
        <div class="col-md-12">
            <div class="card card-primary card-outline mb-4"> <!--begin::Header-->
                <div class="card-header">
                    <div class="card-title">Show product</div>
                </div> <!--end::Header--> <!--begin::Form-->

                    <div class="card-body">
                        <div class="mb-3"> <label for="name"  class="form-label">Name</label> <input type="text" class="form-control" readonly name="name" value="{{$product->name}}" id="name" placeholder="Name" >
                        </div>
                        <div class="mb-3"> <label for="description" class="form-label">Description</label> <textarea type="text" class="form-control" readonly name="description" id="description" placeholder="Description">{{$product->description}}</textarea>
                        </div>
                        <div class="mb-3"> <label for="name" class="form-label">Price</label> <input type="number" step="any" readonly class="form-control" value="{{$product->price}}" name="price" id="price" placeholder="Price" >
                        </div>
                    </div> <!--end::Body--> <!--begin::Footer-->
            </div>
        </div>
    </div>

@endsection
