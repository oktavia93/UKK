<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Product</title>
</head>

<body>


    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('tambah.produk') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <label for="judul">Judul:</label><br>
        <input type="text" id="judul" name="judul" value="{{ old('judul') }}"><br>

        <label for="keterangan">Keterangan:</label><br>
        <textarea id="keterangan" name="keterangan">{{ old('keterangan') }}</textarea><br>

        <label for="gambar">Gambar:</label><br>
        <input type="file" id="gambar" name="gambar"><br><br>

        <button type="submit">Create Product</button>
    </form>
</body>

</html>
