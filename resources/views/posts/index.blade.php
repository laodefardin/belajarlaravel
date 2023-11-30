<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
    <link href="{{ asset('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="{{ asset('bootstrap/js/bootstrap.bundle.min.js') }}"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <style>
        .blog {
            padding: 5px;
            border-bottom: 1px solid lightgrey;
        }

        small {
            color: grey;
        }
    </style>
</head>

<body>
    <div class="container">
    <h1>Blog Codepolitan
        <a href="{{ url("posts/create") }}" class="btn btn-success btn-sm">+ Buat Postingan</a>
    </h1>

        @php($number = 1)
        @foreach ($posts as $post)
        {{-- @php($post = explode(",", $post)) --}}
            <div class="card mb-3">
                <div class="card-body">
                    <h5 class="card-title">{{ $post->judul}} <small>#{{ $number }}</small></h5>
                    <p class="card-text">{{ $post->konten }}</p>
                    <p class="card-text"><small class="text-body-secondary">Last updated {{ date('d M Y H:i', strtotime($post->created_at)) }}</small></p>
                    <a href="{{ url("posts/$post->id") }}" class="btn btn-primary btn-sm">Selengkapnya</a>
                    <a href="{{ url("posts/$post->id/edit") }}" class="btn btn-warning btn-sm">Edit</a>

                </div>
            </div>
            @php($number++)
        @endforeach
    </div>

</body>

</html>
