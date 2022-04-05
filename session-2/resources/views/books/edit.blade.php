@extends('layouts.main')

@section('content')
    <div class="container">
        <h3 class="py-3">Edit Book</h3>

        <form action="{{ route('update-book', $book->id) }}" method="POST">
            @csrf
            @method('put')
            <div class="form-group mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ $book->title }}">
            </div>

            <div class="form-group mb-3">
                <label for="author" class="form-label">Author</label>
                <input type="text" class="form-control" id="author" name="author" value="{{ $book->author }}">
            </div>

            <button type=" submit" name="submit" class="btn btn-primary">Submit</button>
    </div>
@endsection
