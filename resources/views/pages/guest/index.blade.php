{{-- UTIL --}}

@section('nav__item-beranda', 'active')
@section('nav__icon-beranda', 'opacity-100')

{{-- MAIN --}}
@extends('layouts.guest')

@include('layouts.components.guest._header')
@include('layouts.components.guest._navbar')

@section('main')
<style>
  .jumbotron {
    background-image: url('{{ asset("images/foto18.jpeg") }}');
    background-size: cover;
    background-position: center;
    background-blend-mode: multiply;
    background-color: rgba(0, 0, 0, 0.6);
    height: 60vh;
    display: flex;
    justify-content: center;
    align-items: center;
    text-align: center;
    padding: 0 20px;
  }

  .jumbotron h1 {
    font-size: 3rem;
    font-weight: bold;
    text-shadow: 2px 2px 6px rgba(0, 0, 0, 0.6);
  }

  .cta-btn {
    background-color: #007bff;
    border-color: #007bff;
    font-size: 1.2rem;
    padding: 10px 20px;
    border-radius: 5px;
    transition: transform 0.3s, background-color 0.3s;
  }

  .cta-btn:hover {
    background-color: #0056b3;
    border-color: #0056b3;
    transform: scale(1.05);
  }

  .card {
    transition: transform 0.3s, box-shadow 0.3s;
  }

  .card:hover {
    transform: translateY(-5px);
    box-shadow: 0 6px 15px rgba(0, 0, 0, 0.1);
  }

  .gallery img {
    transition: transform 0.3s ease, filter 0.3s ease;
    border-radius: 10px;
  }

  .gallery img:hover {
    transform: scale(1.1);
    filter: brightness(1.2);
  }

  .section-title {
    margin-bottom: 30px;
    font-size: 2rem;
    font-weight: bold;
    color: #343a40;
    text-align: center;
  }

  .section-title span {
    color: #007bff;
  }

  .extracurricular-card img {
    width: 100%;
    height: 200px;
    object-fit: cover;
    border-top-left-radius: 10px;
    border-top-right-radius: 10px;
  }

  .extracurricular-card {
    transition: transform 0.3s, box-shadow 0.3s;
    border-radius: 10px;
    overflow: hidden;
  }

  .extracurricular-card:hover {
    transform: translateY(-5px);
    box-shadow: 0px 6px 12px rgba(0, 0, 0, 0.15);
  }
</style>

<main style="margin-bottom: 200px">
  <div class="jumbotron jumbotron-fluid">
    <div class="">
      <h1 class="display-4 text-light">Selamat Datang di <span class="text-primary uppercase">{{ $dataSekolah->nama_sekolah }}</span></h1>
      <p class="lead text-light">Mencetak Generasi Unggul dan Berkarakter</p>
      <a href="/pendaftaran">
        <button type="button" class="btn cta-btn">Daftar Sekarang</button>
      </a>
    </div>
  </div>

  <div class="container-lg">
    <div class="row justify-content-center align-items-center text-center mb-5">
      <div class="col-md-8">
        <h1 class="display-4 mb-3 font-weight-bold">Tentang Kami</h1>
        <p class="lead mb-4" style="font-size: 1.25rem; line-height: 1.8;">SMA Swasta Mariana adalah lembaga pendidikan yang berkomitmen untuk mencetak lulusan yang berkualitas dan siap bersaing di dunia kerja. Kami menawarkan berbagai program studi yang relevan dengan kebutuhan industri.</p>
        <a href="/profil" class="btn btn-light btn-lg px-5 py-3" style="border-radius: 50px; font-weight: bold;">Selengkapnya</a>
      </div>
    </div>

    <!-- Galeri -->
    <div class="row mb-5 gallery">
      <div class="col-12 text-center">
        <h2 class="section-title">Galeri</h2>
      </div>
      @foreach($galeri as $data)
      <div class="col-md-4 mb-4 d-flex justify-content-center" style="width: 300px; height: 300px;">
        <img src="{{ asset('storage/' . $data->foto) }}" loading="lazy" class=" shadow-sm mx-auto" alt="Galeri 1" style="border-radius: 10px; width: 100%; height: 100%; object-fit: cover;">
      </div>
      @endforeach
      <div class="col-12 text-center mt-3">
        <a href="/galeri" class="btn btn-primary px-5 py-2" style="border-radius: 50px; font-weight: bold;">Lihat Semua Galeri</a>
      </div>
    </div>

    <!-- Ekstrakurikuler -->
    <div class="row mb-5">
      <div class="col-12">
        <h2 class="section-title">Ekstrakurikuler</h2>
      </div>
      <div class="col-md-6 mb-4">
        <div class="card extracurricular-card shadow-sm">
          <img src="{{ asset('images/eks-berenang.jpg') }}" alt="Berenang">
          <div class="card-body">
            <h5 class="card-title">Berenang</h5>
            <p class="card-text">Ekstrakurikuler berenang melatih siswa untuk menjadi lebih sehat, disiplin, dan berprestasi di bidang olahraga air.</p>
          </div>
        </div>
      </div>
      <div class="col-md-6 mb-4">
        <div class="card extracurricular-card shadow-sm">
          <img src="{{ asset('images/eks-ffutsal.jpg') }}" alt="Futsal">
          <div class="card-body">
            <h5 class="card-title">Futsal</h5>
            <p class="card-text">Ekstrakurikuler futsal mendukung siswa dalam pengembangan keterampilan teamwork, strategi, dan kebugaran fisik.</p>
          </div>
        </div>
      </div>
    </div>

    <div class="row mb-5">
      <div class="col-12">
        <h2 class="section-title">Kontak Kami</h2>
      </div>
      <div class="col-md-6 mb-4">
        <div class="card h-100 shadow-sm">
          <div class="card-body">
            <h5 class="card-title">Hubungi Kami</h5>
            <p class="card-text">Jika Anda memiliki pertanyaan atau ingin mendapatkan informasi lebih lanjut, silakan hubungi kami melalui:</p>
            <ul class="list-unstyled">
              <li><i class="fas fa-envelope"></i> Email: <a href="mailto:{{ $dataSekolah->email }}">{{ $dataSekolah->email }}</a></li>
              <li><i class="fas fa-phone"></i> Telepon: {{ $dataSekolah->no_telp }}</li>
              <li><i class="fas fa-map-marker-alt"></i> Alamat: {{ $dataSekolah->alamat }}</li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-md-6 mb-4">
        <div class="card h-100 shadow-sm">
          <div class="card-body">
            <h5 class="card-title">Lokasi Kami</h5>
            <p class="card-text">Kunjungi kami di lokasi yang strategis dan mudah dijangkau. Kami siap menyambut Anda!</p>
            <div class="text-center">
              <iframe src="{{ $dataSekolah->kordinat_maps }}" width="100%" height="250" style="border:0; border-radius: 10px;" allowfullscreen="" loading="lazy"></iframe>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  @include('layouts.components.guest._footer')
</main>
@endsection