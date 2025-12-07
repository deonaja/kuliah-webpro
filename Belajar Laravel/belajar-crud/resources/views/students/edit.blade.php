<!DOCTYPE html>
<html>

<head>
    <title>Edit Mahasiswa</title>
</head>

<body>
    <h1>Edit Mahasiswa</h1>

    <form action="{{ route('students.update', $student->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label>NIM:</label>
        <input type="text" name="nim" value="{{ $student->nim }}"><br>

        <label>Nama:</label>
        <input type="text" name="name" value="{{ $student->name }}"><br>

        <label>Kelas:</label>
        <input type="text" name="kelas" value="{{ $student->kelas }}"><br>

        <label>Gender:</label>
        <select name="gender">
            <option value="L" {{ $student->gender == 'L' ? 'selected' : '' }}>Laki-laki</option>
            <option value="P" {{ $student->gender == 'P' ? 'selected' : '' }}>Perempuan</option>
        </select>
        <br><br>

        <button type="submit">Update</button>
    </form>

    <br>
    <a href="{{ route('students.index') }}">Kembali</a>
</body>

</html>
