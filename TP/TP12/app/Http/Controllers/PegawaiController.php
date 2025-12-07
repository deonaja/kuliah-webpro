<?php

namespace App\Http\Controllers;

use App\Models\Pegawai;
use Illuminate\Http\Request;

class PegawaiController extends Controller
{
    public function index()
    {
        $employees = Pegawai::all();
        return view('home', ['employees' => $employees]);
    }

    public function createView()
    {
        return view('create');
    }

    public function create(Request $request)
    {
        $request->validate([
            'nama'   => 'required',
            'posisi' => 'required',
            'gaji'   => 'required|integer',
        ]);

        Pegawai::create([
            'nama'   => $request->nama,
            'posisi' => $request->posisi,
            'gaji'   => $request->gaji,
        ]);

        return redirect('/')
            ->with('status', 'Data berhasil ditambahkan!');
    }
}

