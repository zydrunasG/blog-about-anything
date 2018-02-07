@extends('layout')

@section('content')

<div class="blog-post">
    <h2 class="blog-post-title">
            {{ $post->title }}
    </h2>
    <p class="blog-post-meta">{{ $post->created_at->toFormattedDateString() }} by <a href="#"> {{ $post->user->name }}</a></p>


    @if(count($post->tags))

        <ul class="list-inline">
            <li class="list-inline-item">Tags:</li>
            @foreach($post->tags as $tag)
                <li class="list-inline-item">

                    <a href="/posts/tags/{{ $tag->name }}">
                        {{ $tag->name }}
                    </a>
                   </li>
                @endforeach
        </ul>
    @endif
    <p>{{ $post->body }}</p>

    <hr>
    <div class="comments">
        <h4>Comments:</h4>
        <ul class="list-group">

        @if(count($post->comments))
        @foreach($post->comments as $comment)
            <li class="list-group-item">
                <strong>
                    {{ $comment->created_at->diffForHumans() }}
                </strong>
                {{ $comment->body }}
            </li>
            @endforeach
        </ul>
        @else
            <li class="list-group-item"><strong>There is no comments, be first!</strong></li>
        @endif
    </div>

    <div class="card">
        <div class="card-block">
            <form action="{{ url('posts/comments', $post->id) }}" method="POST">
                {{ csrf_field() }}
                <div class="form-group">
                    <textarea name="body" class="form-control" placeholder="Your comment here."></textarea>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Add Comment</button>
                </div>
            </form>

            @include('partials.errors')
        </div>
    </div>


    <hr>

</div><!-- /.blog-post -->

    @endsection