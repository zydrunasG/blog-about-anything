@extends('layout')

@section('content')

    <h1 class="page-header">Create a new post</h1>
    <form method="POST" action="{{ url('posts') }}">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="title">Title: </label>
            <input type="text" class="form-control" id="title" name="title">
        </div>

        <div class="form-group">
            <label for="body">Body:</label>
            <textarea class="form-control" id="body" name="body"></textarea>
        </div>



        <div class="form-group">
            <label for="tags">Tags: </label>
        @if($tags->count())
        <select name="tags[]" class="custom-select" multiple>
            @foreach($tags as $tag)
                <option value="{{ $tag->id }}">{{ $tag->name }}</option>
            @endforeach
        </select>
            @else
            There is no tags
        @endif
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary">Publish</button>
        </div>

    </form>

    @include('partials.errors')
@endsection