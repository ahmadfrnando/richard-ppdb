<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Front;
use App\Http\Controllers\Guest;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\KonfirmasiController;
use App\Http\Controllers\PengumumanController;
use App\Http\Controllers\SiswaController;
use App\Models\Kontak;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// GUEST
Route::get('/', [Guest\HomeController::class, 'index'])->name('home');
Route::get('/profil', [Guest\HomeController::class, 'profil'])->name('profil');
Route::get('/struktur-organisasi', [Guest\HomeController::class, 'strukturOrganisasi'])->name('struktur-organisasi');
Route::get('/tugas', [Guest\HomeController::class, 'tugas'])->name('tugas');
Route::get('/fasilitas', [Guest\HomeController::class, 'fasilitas'])->name('fasilitas');
Route::get('/galeri', [Guest\HomeController::class, 'galeri'])->name('galeri');

// CALON PENDAFTAR

Route::get('/login', [Front\HomeController::class, 'index'])->name('login');

Route::get('/persyaratan-pendaftaran', [Front\HomeController::class, 'persyaratan_pendaftaran'])->name('persyaratan_pendaftaran');
Route::get('/program-keahlian', [Front\HomeController::class, 'program_keahlian'])->name('program_keahlian');
Route::get('/profile-sekolah', [Front\HomeController::class, 'profile_sekolah'])->name('profile_sekolah');
Route::get('/rincian-biaya', [Front\HomeController::class, 'rincian_biaya'])->name('rincian_biaya');

Route::get('/pendaftaran', [Front\PendaftaranController::class, 'index'])->name('pendaftaran');
Route::post('/pendaftaran/store', [Front\PendaftaranController::class, 'store'])->name('pendaftaran.store');

Route::get('/detail', [Front\DetailController::class, 'index'])->name('detail');
Route::post('/detail/search', [Front\DetailController::class, 'search'])->name('search');
Route::get('/detail/bukti-pendaftaran/{id}', [Front\DetailController::class, 'bukti'])->name('bukti-pendaftaran');

Route::get('/konfirmasi', [Front\KonfirmasiController::class, 'index'])->name('konfirmasi');
Route::post('/konfirmasi/store', [Front\KonfirmasiController::class, 'store'])->name('konfirmasi.store');
Route::get('/respon', [Front\KonfirmasiController::class, 'respon'])->name('respon');

Route::get('/masuk', [Front\MasukController::class, 'index'])->name('masuk');


// AUTH

Route::get('/login', [AuthController::class, 'index']);
Route::post('/login/store', [AuthController::class, 'login'])->name('login.store');

Route::group(['middleware' => ['auth', 'checkRole:admin,siswa']], function () {
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
});

// SISWA
Route::get('/admin/login', [Front\MasukController::class, 'indexAdmin'])->name('admin.login');

Route::group(['middleware' => ['auth', 'checkRole:siswa']], function () {
    Route::get('/siswa', [Front\SiswaController::class, 'index'])->name('siswa');

    Route::get('/siswa/pengumuman', [Front\SiswaController::class, 'pengumuman'])->name('siswa.pengumuman');

    Route::get('/siswa/data', [Front\SiswaController::class, 'data'])->name('siswa.data');

    Route::get('/siswa/berkas', [Front\SiswaController::class, 'berkas'])->name('siswa.berkas');

    Route::get('/siswa/daftar-ulang', [Front\SiswaController::class, 'daftar_ulang'])->name('siswa.daftar_ulang');
});

// ADMIN

Route::group(['middleware' => ['auth', 'checkRole:admin']], function () {

    Route::get('/admin', [DashboardController::class, 'index'])->name('admin');

    Route::get('/admin/kontak', [DashboardController::class, 'kontak'])->name('admin.kontak');

    Route::post('/admin/kontak/update', [DashboardController::class, 'updateKontak'])->name('admin.kontak.update');

    Route::get('/admin/detail/siswa/{id}', [DashboardController::class, 'detailSiswa'])->name('admin.detail.siswa');

    Route::get('/admin/siswa', [SiswaController::class, 'index'])->name('admin.siswa');

    Route::get('/admin/siswa/buat', [SiswaController::class, 'buat'])->name('admin.siswa.buat');

    Route::post('/admin/siswa/store', [SiswaController::class, 'store'])->name('admin.siswa.store');

    Route::post('/admin/siswa/{id}/status', [SiswaController::class, 'status'])->name('admin.siswa.status');

    Route::get('/admin/siswa/{id}/ubah', [KonfirmasiController::class, 'ubah'])->name('admin.siswa.ubah');

    Route::post('/admin/siswa/{id}/update', [SiswaController::class, 'update'])->name('admin.siswa.update');

    Route::get('/admin/siswa/{id}/destroy', [SiswaController::class, 'destroy'])->name('admin.siswa.destroy');

    Route::get('/admin/siswa/{id}/berkas/{berkas}', [SiswaController::class, 'berkasDownload'])->name('admin.berkas.download');

    Route::get('/admin/siswa/export', [SiswaController::class, 'export'])->name('admin.siswa.export');

    Route::get('/admin/siswa/kirim/pengumuman', [SiswaController::class, 'kirimPengumuman'])->name('admin.siswa.kirim-pengumuman');

    Route::get('/admin/konfirmasi', [KonfirmasiController::class, 'index'])->name('admin.konfirmasi');

    Route::get('/admin/konfirmasi/{id}', [KonfirmasiController::class, 'detail'])->name('admin.konfirmasi.detail');

    Route::get('/admin/konfirmasi/{id}/status', [KonfirmasiController::class, 'status'])->name('admin.konfirmasi.status');

    Route::get('/admin/pengumuman', [PengumumanController::class, 'index'])->name('admin.pengumuman');

    Route::post('/admin/pengumuman/store', [PengumumanController::class, 'store'])->name('admin.pengumuman.store');

    Route::post('/admin/pengumuman/{id}/update', [PengumumanController::class, 'update'])->name('admin.pengumuman.update');

    Route::get('/admin/pengumuman/{id}/destroy', [PengumumanController::class, 'destroy'])->name('admin.pengumuman.destroy');

    Route::get('/admin/galeri', [GaleriController::class, 'index'])->name('admin.galeri');

    Route::post('/admin/galeri/store', [GaleriController::class, 'store'])->name('admin.galeri.store');

    Route::post('/admin/galeri/{id}/update', [GaleriController::class, 'update'])->name('admin.galeri.update');

    Route::get('/admin/galeri/{id}/destroy', [GaleriController::class, 'destroy'])->name('admin.galeri.destroy');
});
