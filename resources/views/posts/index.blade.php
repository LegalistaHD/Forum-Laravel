<!-- resources/views/posts/index.blade.php -->
@extends('layouts.main')

@section('content')
    <div class="container">
        <h1>Forum Posts</h1>
        
        @auth
            <a href="{{ route('posts.create') }}" class="btn btn-primary">Tambah Post</a>
        @endauth

        @foreach ($posts as $post)
            <div>
                <h2><a href="{{ route('posts.show', $post) }}">{{ $post->title }}</a></h2>
                <p>{{ $post->body }}</p>
                <p>Posted by: {{ $post->user->name }}</p>
            </div>
        @endforeach
    </div>
@endsection
