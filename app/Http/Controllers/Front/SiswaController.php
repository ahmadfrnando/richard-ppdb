<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Pengumuman;
use App\Models\Pesan;
use App\Models\Siswa;
use App\Models\TahapSiswa;
use App\Models\User;
use Illuminate\Http\Request;

class SiswaController extends Controller
{   
    public function index()
    {   
        $siswa = Siswa::where('user_id', auth()->user()->id)->first();
        $tahap = TahapSiswa::where('id_siswa', $siswa->id)->get();
        $tahapan = [
            'tahap1' => $tahap->where('tahap', 1)->first(),
            'tahap2' => $tahap->where('tahap', 2)->first(),
            'tahap3' => $tahap->where('tahap', 3)->first(),
        ];
        
        $user = User::find(auth()->user()->id);
        $pengumuman = Pengumuman::all();
        $siswa = $user->siswa;
        $pengumumanCount = Pengumuman::where('id_status', $siswa->status)->orWhere('id_status', 1)->get();
        $pesan = null;
        if(Pesan::where('id_siswa', $siswa->id)->exists())
        {
            $pesan = Pesan::where('id_siswa', $siswa->id)->first();
        }

        return view('/pages/siswa/index', compact('siswa', 'pengumuman', 'pesan', 'pengumumanCount', 'tahap', 'tahapan'));
    }

    public function pengumuman()
    {
        $user_id = auth()->user()->id;
        $siswa = Siswa::where('user_id', $user_id)->first();
        $pengumumanCount = Pengumuman::where('id_status', $siswa->status)->orWhere('id_status', 1)->orWhere('id_status', 2)->get();
        $pengumuman = Pengumuman::where('id_status', $siswa->status)->orWhere('id_status', 1)->orWhere('id_status', 2)->paginate(5);
        return view('pages/siswa/pengumuman', compact('pengumuman', 'pengumumanCount'));
    }

    public function data()
    {
        $user_id = auth()->user()->id;
        $siswa = Siswa::where('user_id', $user_id)->first();
        $pengumumanCount = Pengumuman::where('id_status', $siswa->status)->orWhere('id_status', 1)->get();
        return view('pages/siswa/data', compact('siswa', 'pengumumanCount'));
    }

    public function berkas()
    {   
        $user_id = auth()->user()->id;
        $siswa = Siswa::where('user_id', $user_id)->first();
        $pengumumanCount = Pengumuman::where('id_status', $siswa->status)->orWhere('id_status', 1)->get();
        return view('pages/siswa/berkas', compact('siswa', 'pengumumanCount'));
    }

    public function daftar_ulang()
    {
        return view('pages/siswa/daftar-ulang');
    }
}
