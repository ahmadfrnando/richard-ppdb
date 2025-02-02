<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kontak extends Model
{   
    use HasFactory;

    protected $table = 'kontak';

    protected $fillable = [
        'nama_sekolah',
        'no_telp',
        'alamat',
        'email',
        'no_wa',
        'kordinat_maps',
        'jam_buka',
        'jam_tutup',
    ];
}
