<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;

    protected $table = 'siswa';
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function konfirmasi()
    {
        return $this->hasMany(Konfirmasi::class);
    }

    public function setTahap($id, $tahap)
    {
        $tahapSiswa = new TahapSiswa();
        $tahapSiswa->id_siswa = $id;
        $tahapSiswa->tahap = $tahap;
        $tahapSiswa->save();
    }
}
