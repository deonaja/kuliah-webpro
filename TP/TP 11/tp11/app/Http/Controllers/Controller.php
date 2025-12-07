<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

abstract class Controller
{
    //
    public function form() {
        return view("form");
    }
    public function simpan(Request $request) {
        session([
            'nama' => $request->nama,
            'nim' => $request->nim
        ]);

        return redirect('/tampil');
    }
    public function tampil() {
        return view('tampil');
    }
}
