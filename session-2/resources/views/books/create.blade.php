@extends('layouts.main')

@section('content')
    <div class="container">
        <h3 class="py-3">Create Book</h3>

        <form action="{{ route('store-book') }}" method="POST">
            @csrf
            <div class="form-group mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="Enter title">
            </div>

            <div class="form-group mb-3">
                <label for="author" class="form-label">Author</label>
                <input type="text" class="form-control" id="author" name="author" placeholder="Enter author">
            </div>

            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    </div>
@endsection
