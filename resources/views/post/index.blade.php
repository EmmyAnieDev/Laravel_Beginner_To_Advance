<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Posts</title>
</head>
<body>
        @foreach ($posts as $post)
            @can('update', $post)
                <a href="{{ route('post.edit', $post->id) }}">{{ $post->title }}</a></br>
            @endcan
        @endforeach

</body>
</html>
