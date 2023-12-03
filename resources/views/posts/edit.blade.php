<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog | Ubah Postingan</title>
    <link href="{{ asset('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<script src="{{ asset('bootstrap/js/bootstrap.bundle.min.js') }}"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
</script>
</head>

<body>
    <h1>Ubah Postingan</h1>

    <form action="{{ url("posts/$post->id") }}" method="post" class="form-control">
        @method('PATCH')
        @csrf
        <div class="mb-3">
            <label for="judul" class="form-label">Judul</label>
            <input type="text" class="form-control" id="judul" name='judul' value="{{ $post->judul }}">
        </div>
        <div class="mb-3">
            <label for="konten" class="form-label">Konten</label>
            <textarea class="form-control" id="konten" name="konten" rows="3">{{ $post->konten }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary btn-sm">Tambahkan</button>
    </form>

    <form action="{{ url("posts/$post->id") }}" method="post">
        @method('DELETE')
        @csrf
        <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
    </form>
</body>

</html>
