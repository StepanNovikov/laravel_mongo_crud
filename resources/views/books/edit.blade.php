@extends('layouts.app')

@section('content')
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">{{ __('Edit Book') }}</div>

            <div class="card-body">
                <form action="{{route('books.update', [$book ])}}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" class="form-control" id="name" value="{{$book->name}}">
                    </div>
                    <div class="form-group">
                        <label for="pages">Pages</label>
                        <input type="text" name="pages" class="form-control" id="name" value="{{$book->pages}}">
                    </div>
                    <div class="form-group">
                        <label for="price">Price</label>
                        <input type="text" name="price" class="form-control" id="name" value="{{$book->price}}">
                    </div>
                    <div class="form-group">
                        <label for="name">Author</label>
                        <select name="author_id" id="author_id" class="form-control">
                            @foreach($authors as $author)
                                <option value="{{$author->id}}" @if($book->author->id === $author->id) selected @endif>
                                    {{$author->name}}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <button class="btn btn-primary mt-3">Update</button>
                </form>
            </div>
        </div>
    </div>
@endsection
