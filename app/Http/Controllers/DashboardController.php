<?php

namespace App\Http\Controllers;

use App\Models\Pengumuman;
use App\Models\Siswa;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $siswa = Siswa::all();
        $pengumuman = Pengumuman::all();

        $to = $siswa->where('program_keahlian', 'Teknik Otomotif')->count();
        $tm = $siswa->where('program_keahlian', 'Teknik Mesin')->count();
        $te = $siswa->where('program_keahlian', 'Teknik Elektronika')->count();
        $tkjt = $siswa->where('program_keahlian', 'Teknik Komputer Jaringan dan Telekomunikasi')->count();
        $pplg = $siswa->where('program_keahlian', 'Pengembangan Perangkat Lunak dan Gim')->count();
        $data=[];

        return view('pages/admin/index', compact('siswa', 'pengumuman', 'to', 'tm', 'te', 'tkjt', 'pplg', 'data'));
    }

    public function detailSiswa($id)
    {
        $siswa = Siswa::find($id);
        $dataSiswa = Siswa::all();
        $pengumuman = Pengumuman::all();

        return view('pages/admin/detail', compact('siswa', 'dataSiswa', 'pengumuman'));
    }
}
