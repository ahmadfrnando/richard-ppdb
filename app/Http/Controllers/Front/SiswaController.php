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
        $siswa = $user->siswa;
        $pengumumanCount = Pengumuman::where('filter_status', $siswa->status)->orWhere('filter_status', 1)->get();
        $pesan = null;
        if(Pesan::where('id_siswa', $siswa->id))
        {
            $pesan = Pesan::where('id_siswa', $siswa->id)->first();
        }

        return view('/pages/siswa/index', compact('siswa', 'pengumuman', 'pesan', 'pengumumanCount'));
    }

    public function pengumuman()
    {
        $user_id = auth()->user()->id;
        $siswa = Siswa::where('user_id', $user_id)->first();
        $pengumumanCount = Pengumuman::where('filter_status', $siswa->status)->orWhere('filter_status', 1)->get();
        $pengumuman = Pengumuman::where('filter_status', $siswa->status)->orWhere('filter_status', 1)->paginate(5);
        return view('pages/siswa/pengumuman', compact('pengumuman', 'pengumumanCount'));
    }

    public function daftar_ulang()
    {
        return view('pages/siswa/daftar-ulang');
    }
}
