@extends('layouts.app')

@section('content')
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">{{ __('Authors') }}</div>

            <div class="card-body">
                <a href="{{route('authors.create')}}" class="btn btn-primary">Create new Author</a>
                <div class="mt-3">
                    <h3>List of authors</h3>
                    <li class="list-group">
                        @forelse($authors as $author)
                            <li class="list-group-item">
                                {{$author->name}}
                                <span style="float: right" class="d-flex">
                                    <a href="{{route('authors.edit',[$author])}}" class="btn btn-warning btn-sm " style="margin-right: 10px">Edit</a>
                                    <form action="{{route('authors.destroy',[$author])}}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger btn-sm">
                                            Delete
                                        </button>
                                    </form>
                                </span>
                            </li>
                        @empty
                            <li class="list-group-item">No Author added yet</li>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
