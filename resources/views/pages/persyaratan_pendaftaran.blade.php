{{-- UTIL --}}
@section('nav__item-persyaratan', 'active')
@section('nav__icon-persyaratan', 'opacity-100')

{{-- MAIN --}}

@extends('layouts.app')

@include('layouts.components.app._header')
@include('layouts.components.app._navbar')

@section('main')
<main>
  <div class="container-lg py-4">
    <div class="row justify-content-center">
      <div class="col-12 col-lg-9 px-0 px-md-3 mb-4">
        <div class="mb-md-3 px-3 px-md-5 py-4 py-md-5 bg-success shadow-sm">
          <h4 class="text-white mb-0">Persyaratan Pendaftaran</h4>
          <h4 class="text-white uppercase">{{ $dataSekolah->nama_sekolah }}</h4>
          <h6 class="text-white font-weight-normal">TAHUN PELAJARAN 2024/2025</h6>
        </div>
        <div class="mb-3 px-3 px-md-5 py-4 py-md-5 bg-light shadow-sm">
          <div class="mb-4">
            <div class="d-flex align-items-center pb-3">
              <span class="bg-primary mb-2 rounded-pill" style="height: 0.4rem; width: 1.6rem;"></span>
              <h5 class="ml-3">Berkas Persyaratan</h5>
            </div>
            <div class="">
              <div class="mb-4">
                <h6># Calon siswa berpakaian seragam sekolah SMP, didampingi orang tua hadir kesekolah mendaftarkan
                  diri dengan membawa berkas persyaratan :</h6>
                <p class="mb-0">1. Bukti Pendaftaran Online</p>
                <p class="mb-0">2. Fotocopy KTP/Kartu Pelajar (2 Lembar) </p>
                <p class="mb-0">3. Fotocopy Kartu Keluarga (1 Lembar)</p>
                <p class="mb-0">4. Fotocopy SKHU (2 Lembar)</p>
                <p class="mb-0">5. Fotocopy Ijazah (2 Lembar)</p>
                <p class="mb-0">6. Pass Foto Menggunakan Baju SMA dengan menggunakan latar merah dengan ukuran 3x4 = 2 Lembar dan 4x6 = 2 Lembar</p>
              </div>
            </div>
          </div>
        </div>
      </div>

      @include('layouts.components.app._sidebar')

    </div>
  </div>
</main>
@endsection