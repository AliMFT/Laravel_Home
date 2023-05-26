
@extends('home')
@section('home')
@section('content')
    @foreach($posts as $post)
        @if($loop->first)
            <h1 style="color: #2dc64f; margin:auto;padding: 50px 0 50px 0;">Wellcome Your Website</h1>
        @endif
        <article>
            {!!
                $post->title;
            !!}
            {!!
                $post->body;
            !!}

        </article>
    @endforeach
@endsection

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/app.css">
    <title>My Posts</title>

</head>
<body>
    <div>
        @foreach($posts as $post)
            @if($loop->first)
                <h1 style="color: #2dc64f; margin:auto;padding: 50px 0 50px 0;">Wellcome Your Website</h1>
            @endif
                <article>
                    {!!
                        $post->title;
                    !!}
                    {!!
                        $post->body;
                    !!}

                </article>
        @endforeach
    </div>
</body>
</html>
