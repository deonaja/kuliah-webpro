@extends('layout')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h4>Daftar Karyawan</h4>
        <a href="{{ route('pegawai.createView') }}" class="btn btn-primary">Tambah</a>
    </div>

    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif

    <div class="card">
        <div class="card-body p-0">
            <table class="table mb-0">
                <thead class="table-dark">
                    <tr>
                        <th style="width: 60px;">ID</th>
                        <th>Nama</th>
                        <th>Posisi</th>
                        <th>Gaji</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($employees as $e)
                        <tr>
                            <td>{{ $e->id }}</td>
                            <td>{{ $e->nama }}</td>
                            <td>{{ $e->posisi }}</td>
                            <td>Rp {{ number_format($e->gaji, 0, ',', '.') }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4" class="text-center">No data available.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection
