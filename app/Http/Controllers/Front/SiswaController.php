<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Pengumuman;
use App\Models\Pesan;
use App\Models\Siswa;
use App\Models\User;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function index()
    {
        $user = User::find(auth()->user()->id);
        $pengumuman = Pengumuman::all();
        $pesan = Pesan::where('id_siswa', $user->siswa->id)->get();
        $siswa = $user->siswa;

        return view('/pages/siswa/index', compact('siswa', 'pengumuman', 'pesan'));
    }

    public function pengumuman()
    {
        $user_id = auth()->user()->id;
        $siswa = Siswa::where('user_id', $user_id)->first();
        $pengumuman = Pengumuman::where('filter_status', $siswa->status)->get();
        $pesan = Pesan::where('id_siswa', $siswa->id)->get();

        return view('pages/siswa/pengumuman', compact('pengumuman', 'pesan'));
    }

    public function daftar_ulang()
    {
        return view('pages/siswa/daftar-ulang');
    }
}
