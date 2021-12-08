@extends('layouts.app')

@section('content')
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">{{ __('Create a New Book') }}</div>

            <div class="card-body">
                <form action="{{route('books.store')}}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" class="form-control" id="name">
                    </div>
                    <div class="form-group">
                        <label for="pages">Pages</label>
                        <input type="text" name="pages" class="form-control" id="name">
                    </div>
                    <div class="form-group">
                        <label for="price">Price</label>
                        <input type="text" name="price" class="form-control" id="name">
                    </div>
                    <div class="form-group">
                        <label for="name">Author</label>
                        <select name="author_id" id="author_id" class="form-control">
                            @forelse($authors as $author)
                                <option value="{{$author->id}}">{{$author->name}}</option>
                            @empty
                            @endforelse
                        </select>
                    </div>
                    <button class="btn btn-primary mt-3">Save</button>
                </form>
            </div>
        </div>
    </div>
@endsection
