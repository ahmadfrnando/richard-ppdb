<?php

namespace App\Http\Controllers;

use App\Models\Konfirmasi;
use App\Models\Siswa;
use Illuminate\Http\Request;

class KonfirmasiController extends Controller
{
    public function index()
    {
        $konfirmasi =  Siswa::where('status', 1)->orderBy('id', 'DESC')->get();

        return view('pages/admin/konfirmasi/index', compact('konfirmasi'));
    }

    public function detail($id)
    {
        $konfirmasi =  Siswa::find($id);

        $siswa = Siswa::find($konfirmasi->id);

        return view('pages/admin/konfirmasi/detail', compact('konfirmasi', 'siswa'));
    }

    public function status($id)
    {
        Siswa::find($id)->update([
            'status' => true
        ]);;

        return redirect()->route('admin.konfirmasi')->with('success', 'Status Pendaftar berhasil diaktifkan');
    }
}
