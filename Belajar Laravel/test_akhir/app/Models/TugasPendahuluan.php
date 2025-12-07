<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TugasPendahuluan extends Model
{
    //
    protected $fillable = [
        'judul',
        'subJudul',
        'kategori',
        'tanggalPost',
        'deadline',
        'deskripsi',
    ];
}
