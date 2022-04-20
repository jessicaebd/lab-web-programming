@extends('layouts.main')

@section('title', 'Home')

@section('content')
    <div class="container mt-5">
        <h1 class="text-center">Aircrafts List</h1>

        <div class="row">
            @foreach ($aircrafts as $aircraft)
                <div class="col-md-4 mt-4">
                    <div class="card" style="width: 18rem;">
                        <img src="{{ asset('/storage/' . $aircraft->type . '/' . $aircraft->image_path) }}"
                            class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{ $aircraft->name }}</h5>
                            <p class="fs-6 text-secondary mb-2">Rp. {{ $aircraft->price }}</sp>
                            <div class="mb-2">
                                <span class="badge bg-danger">{{ $aircraft->type }}</span>
                                <span class="badge bg-info text-dark">{{ $aircraft->registration }}</span>
                            </div>
                            <a href="{{ route('editAircraft', $aircraft->registration) }}" class="btn btn-dark">Edit</a>

                            {{-- delete --}}
                            {{-- <form action="{{ route('editAircraft') }}" method="post">
                                @csrf
                                @method('PUT')
                                <input type="hidden" name="reg" value="{{ $aircraft->registration }}">
                                <button type="submit" class="btn btn-dark">Update</button>
                            </form> --}}

                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
