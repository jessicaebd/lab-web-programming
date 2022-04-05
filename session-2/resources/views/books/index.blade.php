@extends('layouts.main')

@section('content')
    {{-- show all books --}}
    <div class="container">
        <h3 class="py-3">Book Lists</h3>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Author</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($books as $book)
                    <tr>
                        <td>{{ $book->title }}</td>
                        <td>{{ $book->author }}</td>
                        <td class="d-flex">
                            <a href="{{ route('edit-book', $book->id) }}" class="btn btn-primary me-3">Edit</a>
                            <form action="{{ route('delete-book', $book->id) }}" method="post">
                                @csrf
                                @method('delete')
                                <button class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endsection
