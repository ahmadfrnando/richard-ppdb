<?php

namespace App\Http\Controllers;

use App\Models\Kontak;
use App\Models\Pengumuman;
use App\Models\Siswa;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $siswa = Siswa::all();
        $pengumuman = Pengumuman::all();
        
        
        return view('pages/admin/index', compact('siswa', 'pengumuman'));
    }

    public function detailSiswa($id)
    {
        $siswa = Siswa::find($id);
        $dataSiswa = Siswa::all();
        $pengumuman = Pengumuman::all();

        return view('pages/admin/detail', compact('siswa', 'dataSiswa', 'pengumuman'));
    }

    public function kontak()
    {
        $kontak = Kontak::find(1);
        return view('pages/admin/kontak', compact('kontak'));
    }

    public function updateKontak(Request $request)
    {   
        try {
            $request->validate([
                'nama_sekolah' => 'required',
                'no_telp' => 'required',
                'no_wa' => 'required',
                'alamat' => 'required',
                'email' => 'required',
                'kordinat_maps' => 'required',
                'jam_buka' => 'required',
                'jam_tutup' => 'required',
            ]);
    
            $kontak = Kontak::find(1);
            $kontak->update($request->only(['no_telp', 'no_wa', 'alamat', 'email', 'kordinat_maps', 'jam_buka', 'jam_tutup', 'nama_sekolah']));
    
            return redirect()->back()->with('success', 'Kontak berhasil diupdate');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'Kontak gagal diupdate'. $th->getMessage());
        }
    }
}
