<!DOCTYPE html>
<html>

<head>
    <title>Tambah Mahasiswa</title>
</head>

<body>
    <h1>Tambah Mahasiswa</h1>

    <form action="{{ route('students.store') }}" method="POST">
        @csrf

        <label>NIM:</label>
        <input type="text" name="nim"><br>

        <label>Nama:</label>
        <input type="text" name="name"><br>

        <label>Kelas:</label>
        <input type="text" name="kelas"><br>

        <label>Gender:</label>
        <select name="gender">
            <option value="L">Laki-laki</option>
            <option value="P">Perempuan</option>
        </select>
        <br><br>

        <button type="submit">Simpan</button>
    </form>

    <br>
    <a href="{{ route('students.index') }}">Kembali</a>
</body>

</html>
