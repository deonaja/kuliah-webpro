@extends('layout')

@section('content')
    <h4 class="mb-3">Tambah Karyawan Baru</h4>

    <div class="card">
        <div class="card-body">
            <form action="{{ route('pegawai.create') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label class="form-label">Nama Lengkap</label>
                    <input type="text" name="nama" class="form-control" placeholder="Ex: Budi Santoso" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Posisi / Jabatan</label>
                    <select name="posisi" class="form-select" required>
                        <option value="" selected disabled>Pilih Posisi</option>
                        <option value="Staff">Staff</option>
                        <option value="Project Manager">Project Manager</option>
                        <option value="Supervisor">Supervisor</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label class="form-label">Gaji (IDR)</label>
                    <input type="number" name="gaji" class="form-control" placeholder="Rp 5.000.000" required>
                    <div class="form-text">Masukkan angka saja tanpa titik atau koma.</div>
                </div>

                <div class="d-flex justify-content-end">
                    <a href="{{ route('home') }}" class="btn btn-secondary me-2">Batal</a>
                    <button type="submit" class="btn btn-primary">Simpan Data</button>
                </div>
            </form>
        </div>
    </div>
@endsection
