@extends('layouts.guest')

@include('layouts.components.guest._header')
@include('layouts.components.guest._navbar')

@section('main')
<style>
  .hero-section {
    background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)),
    url('{{ asset("images/hero-profile.jpg") }}') center/cover no-repeat;
    color: white;
    text-align: center;
    padding: 100px 20px;
  }

  .hero-section h1 {
    font-size: 3rem;
    font-weight: bold;
    margin-bottom: 20px;
  }

  .feature-card {
    border-radius: 10px;
    box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s, box-shadow 0.3s;
  }

  .feature-card:hover {
    transform: translateY(-10px);
    box-shadow: 0px 6px 16px rgba(0, 0, 0, 0.2);
  }

  .feature-card i {
    font-size: 2.5rem;
    color: #007bff;
    margin-bottom: 15px;
  }

  .misi-list {
    text-align: left;
  }

  .misi-list li {
    margin-bottom: 10px;
  }
</style>

<main style="margin-bottom: 200px !important">
  <!-- Hero Section -->

  <div class="hero-section">
    <h1 class="text-light">Profil Sekolah</h1>
  </div>

  <div class="container-lg py-5">
    <h2 class="text-center font-weight-bold mb-5">Visi, Misi, dan Motto</h2>
    <div class="row">
      <!-- Visi -->
      <div class="col-md-4">
        <div class="feature-card p-4 bg-light text-center">
          <i class="fas fa-eye"></i>
          <h5 class="mt-3">Visi</h5>
          <p>Melahirkan Sumber Daya Manusia (SDM) yang Berprestasi, Berbudi Pekerti, Berdisiplin, Berbudaya, dan Beriman sehingga mampu bersaing serta menyesuaikan diri dengan perkembangan zaman berdasarkan norma-norma Katolik.</p>
        </div>
      </div>

      <!-- Misi -->
      <div class="col-md-4">
        <div class="feature-card p-4 bg-light misi-list">
          <div class="text-center">
            <i class="fas fa-bullseye"></i>
            <h5 class="mt-3">Misi</h5>
          </div>
          <ul class="list-unstyled mt-3">
            <li>1. Memiliki budaya berprestasi, budaya disiplin, budaya hidup sehat, dan berbudi pekerti yang luhur.</li>
            <li>2. Tersedianya sarana dan prasarana pendidikan yang baik untuk mendukung pengembangan peserta didik secara optimal.</li>
            <li>3. Setiap siswa akan memperoleh pelayanan pendidikan dan pengajaran secara maksimal sesuai target kurikulum yang berlaku.</li>
            <li>4. Kegiatan Bimbingan Siswa (BP/BK) terlaksana dengan PENDIKAR untuk pembinaan kepribadian siswa.</li>
            <li>5. Menjadikan sekolah sebagai pusat informasi yang melimpah, cepat, dan mudah dari berbagai sumber di dunia.</li>
            <li>6. Menjadikan edukasi yang mengutamakan nilai-nilai Kristiani sebagai pintu menghadapi realita global.</li>
          </ul>
        </div>
      </div>

      <!-- Motto -->
      <div class="col-md-4">
        <div class="feature-card p-4 bg-light text-center">
          <i class="fas fa-quote-left"></i>
          <h5 class="mt-3">Motto</h5>
          <p>"DISIPLIN ADALAH KUNCI SUKSES"</p>
        </div>
      </div>
    </div>
  </div>

  <!-- Sejarah -->
  <div class="container-lg py-5">
    <h2 class="text-center font-weight-bold mb-5">Sejarah Singkat Sekolah</h2>
    <div class="row align-items-center">
      <div class="col-md-5">
        <img src="{{ asset('images/foto-gapura.jpeg') }}" class="img-fluid rounded shadow-sm" alt="Sejarah Sekolah">
      </div>
      <div class="col-md-7">
        <p class="text-justify">
          Berdirinya Yayasan Katolik Mariana diawali dengan tujuan Sosial ke Masyarakat yaitu
          dengan cara mendirikan satu Yayasan yang disebut dengan Yayasan Katolik Mariana yang dimulai dari tingkat TK, SD, SMP, SMA DAN SMK. Yayasan Katolik Mariana resmi membuka Sekolah Dasar ( SD ) pada tahun 1977 , SMP (Sekolah Menengah Pertama) tahun 1980 dan SMA (Sekolah Menengah Atas) pada tahun 1981 dan SMK (Sekolah Menengah Kejuruan) tahun 1988. Berdirinya Sekolah ini dengan alasan untuk bisa menampung siswa yang berniat sekolah yang diseputaran Medan Helvetia. Yang secara geografis letak sekolah ini strategis dan padat dengan pemukiman masyarakat.
        </p>
      </div>
    </div>
  </div>
  @include('layouts.components.guest._footer')
</main>

@endsection