{{-- display a list of comments in laravel blade view --}}
<h1>All Comments</h1>
<ul>
    @foreach ($comments as $comment)
        <li>{{$comment->content}}</li>
        <form action="delete/{{$comment->id}}" method="post">
            @csrf
            @method('DELETE')
            <button type="submit">Delete comment</button>
        </form>
        <a href="/comments/update/{{$comment->id}}">Edit comment</a>
    @endforeach
</ul>

{{-- create a link back to create form --}}