<!DOCTYPE html>
<html>

<head>
    <title>Daftar Mahasiswa</title>
</head>

<body>
    <h1>Daftar Mahasiswa</h1>

    @if (session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

    <a href="{{ route('students.create') }}">Tambah Mahasiswa</a>

    <table border="1" cellpadding="8" cellspacing="0">
        <tr>
            <th>ID</th>
            <th>NIM</th>
            <th>Nama</th>
            <th>Kelas</th>
            <th>Gender</th>
            <th>Aksi</th>
        </tr>

        @foreach ($students as $s)
            <tr>
                <td>{{ $s->id }}</td>
                <td>{{ $s->nim }}</td>
                <td>{{ $s->name }}</td>
                <td>{{ $s->kelas }}</td>
                <td>{{ $s->gender }}</td>
                <td>
                    <a href="{{ route('students.edit', $s->id) }}">Edit</a>

                    <form action="{{ route('students.destroy', $s->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit"
                            onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
</body>

</html>
