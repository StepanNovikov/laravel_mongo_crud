@extends('layouts.app')

@section('content')
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">{{ __('Books') }}</div>

            <div class="card-body">
                <a href="{{route('books.create')}}" class="btn btn-primary">Create new Books</a>
                <div class="mt-3">
                    <h3>List of books</h3>
                    <table class="table">
                        <tr>
                            <th>Name</th>
                            <th>Price</th>
                            <th>Pages</th>
                            <th>Author name</th>
                            <th>Action</th>
                        </tr>

                        @forelse($books as $book)
                            <td>{{$book->name}}</td>
                            <td>{{$book->price}}</td>
                            <td>{{$book->pages}}</td>
                            <td>{{$book->author->name}}</td>
                            <td class="d-flex">
                                <a href="{{route('books.edit',[$book])}}" class="btn btn-warning btn-sm " style="margin-right: 10px">Edit</a>
                                <form action="{{route('books.destroy',[$book])}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger btn-sm">
                                        Delete
                                    </button>
                                </form>
                            </td>
                        @empty
                            <tr>
                                <td colspan="5">No book</td>
                            </tr>
                        @endforelse
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
