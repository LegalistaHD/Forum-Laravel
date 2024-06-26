<!-- resources/views/posts/comment.blade.php -->
<div style="margin-left: {{ $comment->parent_id ? '20px' : '0px' }}">
    <p>{{ $comment->body }}</p>
    <p>Commented by: {{ $comment->user->name }}</p>

    <form action="{{ route('comments.store', $comment->post) }}" method="POST">
        @csrf
        <input type="hidden" name="parent_id" value="{{ $comment->id }}">
        <textarea name="body" required></textarea>
        <button type="submit">Reply</button>
    </form>

    @foreach ($comment->children as $child)
        @include('posts.comment', ['comment' => $child])
    @endforeach
</div>
