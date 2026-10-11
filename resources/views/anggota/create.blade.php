<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Anggota</title>
</head>
<body>
    <h2>Form Tambah Anggota</h2>

    @if (session('success'))
        <p style="color: green;">
            {{ session('success') }}
        </p>
    @endif

    @if ($errors->any())
        <ul style="color: red;">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form action="{{ route('anggota.store') }}" method="POST">
        @csrf

        <label>Nama:</label><br>
        <input type="text" name="name" value="{{ old('name') }}" required><br><br>

        <label>Email:</label><br>
        <input type="email" name="email" value="{{ old('email') }}" required><br><br>

        <label>Nomor Telepon:</label><br>
        <input type="text" name="phone" value="{{ old('phone') }}"><br><br>

        <label>Alamat:</label><br>
        <textarea name="alamat">{{ old('alamat') }}</textarea><br><br>

        <button type="submit">Simpan Anggota</button>
    </form>
</body>
</html>