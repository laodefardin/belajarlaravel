<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog | Judul : {{ $post->judul }}</title>
    <link href="{{ asset('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<script src="{{ asset('bootstrap/js/bootstrap.bundle.min.js') }}"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
</script>
    <link rel="stylesheet" href="{{ asset('css/blog.css') }}">
</head>

<body>
    <div class="container">
        <article class="blog-post">
            <h2 class="display-5 link-body-emphasis mb-1">{{ $post->judul }}</h2>
            <p class="blog-post-meta"> {{ date("d M Y H;i", strtotime($post->created_at)) }}</p>

     <p>{{ $post->konten }}</p>
        </article>
        <a href="{{ url("posts") }}"> << Kembali</a>
    </div>
</body>

</html>
