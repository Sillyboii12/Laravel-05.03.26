<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="/comments/update/{{$comment->id}}" method="post">
        @csrf
        <input type="text" name="content" id="content" value="{{$comment->content}}">
        <button type="submit">Save</button>
    </form>
</body>
</html>