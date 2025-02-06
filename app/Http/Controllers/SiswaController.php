<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use App\Models\User;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\SiswaExport;
use App\Models\Pengumuman;
use App\Models\Pesan;

class SiswaController extends Controller
{
    public function index(Request $request)
    {
        $siswa = Siswa::paginate(10);
        return view('/pages/admin/siswa/index', compact('siswa'));
    }

    public function buat()
    {
        return view('/pages/admin/siswa/buat');
    }

    public function store(Request $request)
    {
        date_default_timezone_set("Asia/Jakarta");

        $request->validate([
            'nama' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'jenis_kelamin' => 'required',
            'alamat' => 'required',
            'nomor_hp' => 'required',
            'nisn' => 'required',
            'asal_sekolah' => 'required',
            'nama_ayah' => 'required',
            'umur_ayah' => 'required',
            'pekerjaan_ayah' => 'required',
            'pendidikan_ayah' => 'required',
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
        // dd($request->all());

        $nomor_pendaftaran = 'ID' . '-' . rand(1000, 9999);
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
            'nomor_hp' => $request->nomor_hp,
            'nisn' => $request->nisn,
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
            'status' => true,
            'user_id' => $user->id,
        ]);

        session(['id_siswa' => $siswa->id]);

        return redirect()->route('admin.siswa')->with('success', 'Pendaftar berhasil ditambahkan');
    }

    public function status(Request $request, $id)
    {
        $siswa = Siswa::findOrFail($id);
        $pesan = new Pesan();
        $pengumuman = new Pengumuman();
        $status = $request->input('status');

        if ($status == 2) {
            $siswa->update(['status' => 2]);
            $pesan->judul = 'Selamat';
            $pesan->isi = "Selamat {$siswa->nama} dengan NISN {$siswa->nisn}, data anda telah diverifikasi oleh admin, silahkan tunggu informasi selanjutnya pada menu pengumuman.";
        } elseif ($status == 3) {
            $siswa->update(['status' => 3]);
            $pesan->judul = 'Maaf';
            $pesan->isi = "Selamat {$siswa->nama} dengan NISN {$siswa->nisn}, data anda telah diverifikasi oleh admin, silahkan tunggu informasi selanjutnya pada menu pengumuman.";
        } elseif ($status == 100) {
            $siswa->update(['status' => 100]);
            $pengumuman->judul = 'Maaf';
            $pengumuman->deskripsi = "Selamat {$siswa->nama} dengan NISN {$siswa->nisn}, data anda telah diverifikasi oleh admin, silahkan tunggu informasi selanjutnya pada menu pengumuman.";
            $pengumuman->id_status = 100;
        } elseif ($status == 101) {
            $siswa->update(['status' => 101]);
            $pengumuman->judul = 'Maaf';
            $pengumuman->deskripsi = "Selamat {$siswa->nama} dengan NISN {$siswa->nisn}, data anda telah diverifikasi oleh admin, silahkan tunggu informasi selanjutnya pada menu pengumuman.";
            $pengumuman->id_status = 101;
        }

        $pesan->id_siswa = $id;
        $pesan->save();

        return redirect()->route('admin.konfirmasi')->with('success', 'Status Pendaftar berhasil diperbarui');
    }

    public function ubah($id)
    {
        $siswa = Siswa::find($id);

        return view('/pages/admin/siswa/ubah', compact('siswa'));
    }

    public function update(Request $request, $id)
    {
        date_default_timezone_set("Asia/Jakarta");

        $request->validate([
            'nama' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'jenis_kelamin' => 'required',
            'alamat' => 'required',
            'agama' => 'required',
            'nisn' => 'required',
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

        $siswa = Siswa::find($id);

        $siswa->update([
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
        ]);

        // session(['id_siswa' => $siswa->id]);

        return redirect()->route('admin.siswa')->with('success', 'Pendaftar berhasil diperbarui');
    }

    public function destroy($id)
    {
        $siswa = Siswa::find($id);

        $siswa->delete();

        User::find($siswa->user_id)->delete();


        return redirect()->route('admin.siswa')->with('success', 'Pendaftar berhasil dihapus');
    }

    public function export()
    {
        return Excel::download(new SiswaExport(), 'ppdb_siswa_' . date('Y-m-d h:i') . '.xlsx');
    }

    public function berkasDownload($id, $berkas)
    {
        try {
            $siswa = Siswa::find($id);
            $file = '';
            if ($berkas == 'id') {
                $file = $siswa->file_id;
            } elseif ($berkas == 'kk') {
                $file = $siswa->file_kk;
            } elseif ($berkas == 'ijazah') {
                $file = $siswa->file_ijazah;
            } elseif ($berkas == 'skhu') {
                $file = $siswa->file_skhu;
            } elseif ($berkas == 'pas_foto') {
                $file = $siswa->file_pas_foto;
            }

            return response()->download(storage_path('app/public/file/' . $file));
        } catch (\Exception $e) {
            return redirect()->route('admin.konfirmasi.detail', ['id' => $id])->with('error', 'Berkas tidak ditemukan');
        }
    }
}
