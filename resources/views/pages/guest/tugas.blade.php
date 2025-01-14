{{-- UTIL --}}

@section('nav__item-tugas', 'active')
@section('nav__icon-tugas', 'opacity-100')

{{-- MAIN --}}
@extends('layouts.guest')

@include('layouts.components.guest._header')
@include('layouts.components.guest._navbar')

@section('main')
<style>
  .hero-section {
    background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)),
    url('{{ asset("images/hero-tugas.jpg") }}') center/cover no-repeat;
    color: white;
    text-align: center;
    padding: 100px 20px;
  }

  .card {
    border: 1px solid #ddd;
    border-radius: 8px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    margin-bottom: 20px;
  }

  .card-body {
    font-size: 1rem;
    line-height: 1.6;
  }

  .card-title {
    font-size: 1.25rem;
    font-weight: bold;
    color: #007bff;
  }
</style>

<main style="margin-bottom: 200px">
  <div class="hero-section">
    <h1 class="text-light">Tugas dan Tanggung Jawab</h1>
  </div>

  <div class="container-lg py-5">
    <!-- Kepala Sekolah -->
    <div class="card">
      <div class="card-body">
        <h2 class="card-title">KEPALA SEKOLAH</h2>
        <p>Sebagai: Edukator, Manager, Administrator, Supervisor, Pemimpin/Leader, Inovator, Motivator</p>
      </div>
    </div>

    <!-- Wakil Kepala Sekolah -->
    <div class="card">
      <div class="card-body">
        <h2 class="card-title">WAKIL KEPALA SEKOLAH</h2>
        <h5>Bidang Kurikulum</h5>
        <ul>
          <li>Menyusun pembagian tugas guru dan jadwal/roster mata pelajaran</li>
          <li>Mengatur penyusunan program pengajaran (program tahunan/semester)</li>
          <li>Mengatur pelaksanaan kegiatan kurikuler dan ekstrakurikuler</li>
          <li>Mengatur pelaksanaan program penilaian, kriteria kenaikan kelas, dan kelulusan</li>
          <li>Mengatur pelaksanaan program remedial dan pengayaan</li>
          <li>Mengatur pemanfaatan lingkungan sebagai sumber belajar</li>
          <li>Mengatur pengembangan MGMP dan koordinator mata pelajaran</li>
          <li>Melakukan supervisi administrasi dan akademis</li>
        </ul>
        <h5>Bidang Kesiswaan</h5>
        <ul>
          <li>Mengatur program dan pelaksanaan bimbingan dan konseling</li>
          <li>Mengatur pelaksanaan 7K (Keamanan, Kebersihan, Ketertiban, Keindahan, Kekeluargaan, Kesehatan, Kerindangan)</li>
          <li>Membina pengurus OSIS dalam berorganisasi</li>
          <li>Mengatur program bina siswa/i pengembangan diri</li>
        </ul>
        <h5>Bidang Sarana dan Prasarana</h5>
        <ul>
          <li>Merencanakan kebutuhan prasarana untuk menunjang proses belajar mengajar</li>
          <li>Mengelola perawatan dan pemeliharaan sarana prasarana</li>
          <li>Mengatur kebersihan dan sanitasi lingkungan sekolah</li>
          <li>Menginventarisasi sarana prasarana</li>
        </ul>
      </div>
    </div>

    <!-- Guru -->
    <div class="card">
      <div class="card-body">
        <h2 class="card-title">GURU</h2>
        <p>Guru bertanggung jawab kepada kepala sekolah dan melaksanakan kegiatan proses belajar mengajar secara efektif dan efisien.</p>
        <ul>
          <li>Menyusun program pengajaran tahunan, semester, dan mingguan</li>
          <li>Melaksanakan kegiatan ulangan harian, ulangan umum, dan ujian akhir</li>
          <li>Mengisi daftar hadir siswa dan mencatat kehadiran</li>
          <li>Melaksanakan bimbingan kepada siswa dalam proses belajar mengajar</li>
          <li>Membuat alat pelajaran/alat peraga</li>
        </ul>
      </div>
    </div>

    <!-- Wali Kelas -->
    <div class="card">
      <div class="card-body">
        <h2 class="card-title">WALI KELAS</h2>
        <p>Wali kelas membantu kepala sekolah dalam kegiatan berikut:</p>
        <ul>
          <li>Mengatur tata tertib siswa</li>
          <li>Menyusun daftar nilai dan laporan hasil belajar</li>
          <li>Melakukan pencatatan khusus tentang siswa</li>
          <li>Mengelola mutasi siswa</li>
        </ul>
      </div>
    </div>

    <!-- Perpustakaan -->
    <div class="card">
      <div class="card-body">
        <h2 class="card-title">PERPUSTAKAAN</h2>
        <ul>
          <li>Merencanakan pengadaan buku dan bahan pustaka</li>
          <li>Mengelola pelayanan perpustakaan</li>
          <li>Menyusun tata tertib perpustakaan</li>
          <li>Melakukan inventarisasi buku dan bahan pustaka</li>
        </ul>
      </div>
    </div>

    <!-- Laboratorium -->
    <div class="card">
      <div class="card-body">
        <h2 class="card-title">LABORATORIUM</h2>
        <ul>
          <li>Merencanakan pengadaan alat dan bahan laboratorium</li>
          <li>Mengelola jadwal dan tata tertib penggunaan laboratorium</li>
          <li>Melakukan perawatan dan perbaikan alat laboratorium</li>
        </ul>
      </div>
    </div>

    <!-- Tata Usaha -->
    <div class="card">
      <div class="card-body">
        <h2 class="card-title">TATA USAHA</h2>
        <ul>
          <li>Mengelola administrasi keuangan dan ketenagaan</li>
          <li>Menyusun program kerja tata usaha sekolah</li>
          <li>Melaksanakan pengelolaan data statistik sekolah</li>
        </ul>
      </div>
    </div>

    <!-- OSIS -->
    <div class="card">
      <div class="card-body">
        <h2 class="card-title">OSIS</h2>
        <p>OSIS bertujuan membina siswa dalam berorganisasi dengan dipimpin oleh seorang pembina OSIS.</p>
      </div>
    </div>
  </div>

  @include('layouts.components.guest._footer')
</main>
@endsection
