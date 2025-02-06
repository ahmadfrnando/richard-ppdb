<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Siswa;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class PendaftaranController extends Controller
{
    public function index()
    {
        if (Auth::check()) {
            return redirect()->route('siswa');
        }

        return view('/pages/pendaftaran');
    }

    public function store(Request $request)
    {
        if (Auth::check()) {
            return redirect()->route('siswa');
        }

        date_default_timezone_set("Asia/Jakarta");

        $request->validate([
            'nama' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'jenis_kelamin' => 'required',
            'alamat' => 'required',
            'agama' => 'required',
            'nisn' => 'required|unique:siswa,nisn',
            'nomor_hp' => 'required',
            'asal_sekolah' => 'required',
            'nama_ayah' => 'required',
            'umur_ayah' => 'required',
            'pendidikan_ayah' => 'required',
            'pekerjaan_ayah' => 'required',
            'nama_ibu' => 'required',
            'umur_ibu' => 'required',
            'pendidikan_ibu' => 'required',
            'pekerjaan_ibu' => 'required',
            'nomor_hp_ortu' => 'required',
            'alamat_orang_tua' => 'required',
            'nilai_skhu' => 'required',
            'rata_rata_skhu' => 'required',
            'nomor_ijazah' => 'required',
            'nilai_ijazah' => 'required',
            'rata_rata_ijazah' => 'required',
        ]);

        $fields = ['file_ijazah', 'file_skhu', 'file_id', 'file_kk', 'file_pas_foto'];
        foreach ($fields as $field) {
            if ($request->hasFile($field)) {
                $request->validate([
                    $field => 'mimes:pdf,jpg,jpeg,png|max:2048',
                ]);
        
                $file = $request->file($field);
                $extension = $file->getClientOriginalExtension();
                $filename = time() . '_' . $field . '.' . $extension; // Nama unik berdasarkan field
                $file->storeAs('public/file', $filename);
        
                // Simpan nama file di dalam array untuk dimasukkan ke dalam database
                $filePaths[$field] = $filename;
            } else {
                $filePaths[$field] = null; // Jika tidak ada file yang diupload, tetap isi dengan null
            }
        }
        

        $nomor_pendaftaran = $request->nisn . '-' . rand(1000, 9999);

        $pin = rand(1000, 9999);

        $user = User::create([
            'role' => 'siswa',
            'username' => $request->nisn,
            'password' => bcrypt($pin),
        ]);

        $siswa = Siswa::create([
            'nomor_pendaftaran' => $nomor_pendaftaran,
            'nama' => $request->nama,
            'tempat_lahir' => $request->tempat_lahir,
            'tanggal_lahir' => $request->tanggal_lahir,
            'jenis_kelamin' => $request->jenis_kelamin,
            'alamat' => $request->alamat,
            'agama' => $request->agama,
            'nisn' => $request->nisn,
            'nomor_hp' => $request->nomor_hp,
            'asal_sekolah' => $request->asal_sekolah,
            'nama_ayah' => $request->nama_ayah,
            'umur_ayah' => $request->umur_ayah,
            'pendidikan_ayah' => $request->pendidikan_ayah,
            'pekerjaan_ayah' => $request->pekerjaan_ayah,
            'nama_ibu' => $request->nama_ibu,
            'umur_ibu' => $request->umur_ibu,
            'pendidikan_ibu' => $request->pendidikan_ibu,
            'pekerjaan_ibu' => $request->pekerjaan_ibu,
            'nomor_hp_ortu' => $request->nomor_hp_ortu,
            'alamat_orang_tua' => $request->alamat_orang_tua,
            'nilai_skhu' => $request->nilai_skhu,
            'rata_rata_skhu' => $request->rata_rata_skhu,
            'nomor_ijazah' => $request->nomor_ijazah,
            'nilai_ijazah' => $request->nilai_ijazah,
            'rata_rata_ijazah' => $request->rata_rata_ijazah,
            'pin' => $pin,
            'status' => 1,
            'user_id' => $user->id,
            'file_ijazah' => $filePaths['file_ijazah']  ?? null,
            'file_skhu' => $filePaths['file_skhu']  ?? null,
            'file_id' => $filePaths['file_id']  ?? null,
            'file_kk' => $filePaths['file_kk']  ?? null,
            'file_pas_foto' => $filePaths['file_pas_foto']  ?? null
        ]);

        $siswa->setTahap($siswa->id, 1);

        session(['id_siswa' => $siswa->id]);

        return redirect()->route('detail')->with('success', 'success');
    }
}
