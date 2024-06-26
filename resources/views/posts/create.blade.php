<!-- resources/views/posts/create.blade.php -->
@extends('layouts.main')

@section('content')
    <div class="container">
        <h1>Tambah Post Baru</h1>

        <form action="{{ route('posts.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="title">Judul</label>
                <input type="text" name="title" id="title" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="body">Konten</label>
                <textarea name="body" id="body" class="form-control" rows="5" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Tambah Post</button>
        </form>
    </div>
@endsection
