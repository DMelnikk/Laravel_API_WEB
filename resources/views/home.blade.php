@extends('layouts.default')
@section('content')

    <div class="container mt-5 mb-5">
        <div>
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
        </div>
    </div>


    <div class="container mt-5">
        <h1 class="text-center">
            All CRUD operations are available on admin side
        </h1>
        <h2 class="text-center">Please click here</h2>

        <div class="text-center">
            <button class="btn btn-primary">
                <a href="{{ route('admin.main.index') }}" class="text-decoration-none text-white">
                    Admin
                </a>
            </button>
        </div>


    </div>


@endsection


