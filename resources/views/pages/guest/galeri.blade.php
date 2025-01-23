{{-- UTIL --}}

@section('nav__item-galeri', 'active')
@section('nav__icon-galeri', 'opacity-100')

{{-- MAIN --}}
@extends('layouts.guest')

@include('layouts.components.guest._header')
@include('layouts.components.guest._navbar')

@section('main')
<style>
  .hero-section {
    background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)),
    url('{{ asset("images/foto2.jpeg") }}') center/cover no-repeat;
    color: white;
    text-align: center;
    padding: 100px 20px;
  }

  .gallery-section {
    text-align: center;
    padding: 60px 20px;
  }

  .gallery-section h1 {
    color: #007bff;
    font-weight: bold;
    margin-bottom: 30px;
  }

  .gallery-item {
    margin-bottom: 30px;
    overflow: hidden;
    border-radius: 8px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s, box-shadow 0.3s;
  }

  .gallery-item:hover {
    transform: scale(1.05);
    box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15);
  }

  .gallery-item img {
    width: 100%;
    height: 200px;
    object-fit: cover;
  }

  .gallery-item-title {
    margin-top: 10px;
    font-size: 1.25rem;
    font-weight: bold;
    color: #555;
  }
</style>

<main style="margin-bottom: 200px">
  <div class="hero-section">
    <h1 class="text-light">Galeri Sekolah</h1>
  </div>
  <div class="gallery-section">
    <div class="container-lg">
      <div class="row">
        @foreach ($galeri as $item)
        <div class="col-md-4 gallery-item">
          <img src="{{ asset('images/'. $item->foto) }}" alt="{{ $item->judul }}" loading="lazy">
          <div class="gallery-item-title">{{ $item->judul }}</div>
        </div>
        @endforeach
      </div>
    </div>
  </div>

  @include('layouts.components.guest._footer')
</main>
@endsection