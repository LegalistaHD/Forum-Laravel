<!-- resources/views/posts/show.blade.php -->
@extends('layouts.main')

@section('content')
    <div class="container">
        <h1>{{ $post->title }}</h1>
        <p>{{ $post->body }}</p>
        <p>Posted by: {{ $post->user->name }}</p>

        <h3>Comments</h3>
        @foreach ($post->comments->where('parent_id', null) as $comment)
            @include('posts.comment', ['comment' => $comment])
        @endforeach

        <form action="{{ route('comments.store', $post) }}" method="POST">
            @csrf
            <textarea name="body" required></textarea>
            <button type="submit">Add Comment</button>
        </form>
    </div>
@endsection
