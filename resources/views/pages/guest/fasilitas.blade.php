@extends('layouts.guest')

@include('layouts.components.guest._header')
@include('layouts.components.guest._navbar')

@section('main')
<style>
  .hero-section {
    background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)),
    url('{{ asset("images/hero-fasilitas.jpg") }}') center/cover no-repeat;
    color: white;
    text-align: center;
    padding: 100px 20px;
  }

  .facility-card {
    border: 1px solid #ddd;
    border-radius: 8px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s, box-shadow 0.3s;
    overflow: hidden;
  }

  .facility-card:hover {
    transform: translateY(-5px);
    box-shadow: 0px 6px 12px rgba(0, 0, 0, 0.15);
  }

  .facility-card img {
    width: 100%;
    height: 200px;
    object-fit: cover;
  }

  .facility-card-body {
    padding: 20px;
  }

  .facility-card-title {
    font-size: 1.25rem;
    font-weight: bold;
    color: #007bff;
    margin-bottom: 10px;
  }

  .facility-card-text {
    font-size: 1rem;
    color: #555;
  }
</style>

<main style="margin-bottom: 200px">
  <!-- Hero Section -->
  <div class="hero-section">
    <h1 class="text-light">Fasilitas Sekolah</h1>
    <p class="text-light">Menunjang Pembelajaran Berkualitas dengan Fasilitas Modern</p>
  </div>

  <div class="container-lg py-5">
    <div class="row">
      <!-- Perpustakaan -->
      <div class="col-md-4 mb-4">
        <div class="facility-card">
          <img src="{{ asset('images/fasilitas-perpus.png') }}" alt="Perpustakaan">
          <div class="facility-card-body">
            <h3 class="facility-card-title">Perpustakaan</h3>
            <p class="facility-card-text">Menyediakan berbagai buku dan referensi untuk mendukung pembelajaran siswa.</p>
          </div>
        </div>
      </div>

      <!-- Laboratorium IPA -->
      <div class="col-md-4 mb-4">
        <div class="facility-card">
          <img src="{{ asset('images/fasilitas-lab-ipa.jpg') }}" alt="Laboratorium IPA">
          <div class="facility-card-body">
            <h3 class="facility-card-title">Laboratorium IPA</h3>
            <p class="facility-card-text">Dilengkapi dengan alat-alat modern untuk praktikum sains.</p>
          </div>
        </div>
      </div>

      <!-- Laboratorium Komputer -->
      <div class="col-md-4 mb-4">
        <div class="facility-card">
          <img src="{{ asset('images/fasilitas-lab-kom.jpg') }}" alt="Laboratorium Komputer">
          <div class="facility-card-body">
            <h3 class="facility-card-title">Laboratorium Komputer</h3>
            <p class="facility-card-text">Menyediakan komputer dengan akses internet untuk mendukung pembelajaran digital.</p>
          </div>
        </div>
      </div>

      <!-- Wifi Perkelas -->
      <div class="col-md-4 mb-4">
        <div class="facility-card">
          <img src="{{ asset('images/fasilitas-wifi.jpg') }}" alt="Wifi Perkelas">
          <div class="facility-card-body">
            <h3 class="facility-card-title">Wifi Perkelas</h3>
            <p class="facility-card-text">Akses internet cepat tersedia di setiap kelas untuk mendukung pembelajaran online.</p>
          </div>
        </div>
      </div>

      <!-- Galon Air Setiap Kelas -->
      <div class="col-md-4 mb-4">
        <div class="facility-card">
          <img src="{{ asset('images/fasilitas-dispenser.jpg') }}" alt="Galon Air Setiap Kelas">
          <div class="facility-card-body">
            <h3 class="facility-card-title">Galon Air Setiap Kelas</h3>
            <p class="facility-card-text">Tersedia galon air di setiap kelas untuk mendukung kesehatan siswa.</p>
          </div>
        </div>
      </div>

      <!-- Kipas Angin Setiap Kelas -->
      <div class="col-md-4 mb-4">
        <div class="facility-card">
          <img src="{{ asset('images/fasilitas-kipas.jpg') }}" alt="Kipas Angin Setiap Kelas">
          <div class="facility-card-body">
            <h3 class="facility-card-title">Kipas Angin Setiap Kelas</h3>
            <p class="facility-card-text">Setiap kelas dilengkapi dengan kipas angin untuk kenyamanan belajar.</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  @include('layouts.components.guest._footer')
</main>
@endsection
