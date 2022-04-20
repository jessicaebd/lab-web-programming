@extends('layouts.main')

@section('title', 'Insert')

@section('content')
    <div class="container mt-5 border p-5" style="max-width: 600px;">
        <h1 class="text-center mb-3">Edit Aircraft</h1>

        {{-- show error --}}
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('updateAircraft', $aircraft->registration) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" name="name" id="name" class="form-control" value="{{ $aircraft->name }}">
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Price</label>
                <input type="text" name="price" id="price" class="form-control" value="{{ $aircraft->price }}">
            </div>
            <div class="mb-3">
                <label for="registration" class="form-label">Registration</label>
                <input type="text" name="registration" id="registration" class="form-control"
                    value="{{ $aircraft->registration }}">
            </div>
            <div class="mb-3">
                <input type="file" name="image" id="image" value="{{ $aircraft->image_path }}">
            </div>
            <input class="btn btn-primary" type="submit" value="Submit">


        </form>
    </div>
@endsection
