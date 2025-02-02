{{-- UTIL --}}

@section('nav__item-siswa', 'active')

{{-- MAIN --}}

@extends('layouts.app')

@include('layouts.components.siswa._header')
@include('layouts.components.siswa._navbar')

@section('main')
<main>
  <div class="container-lg d-flex justify-content-center py-4">
    <div class="col-12 col-md-10 col-lg-8 p-0">
      @if ($pesan == null)
      <div class="alert alert-info py-3" role="alert">
        <h4 class="alert-heading text-dark">Selamat, {{ $siswa->nama }} !</h4>
        <p>Terima kasih telah mendaftar di {{ $dataSekolah->nama_sekolah }}, silahkan tunggu konfirmasi dari admin untuk berkas pendaftaran anda. Cek pengumuman untuk informasi lebih lanjut.</p>
        <hr>
        <p class="mb-0">Pastikan anda sudah mengunduh bukti pendaftaran anda.</p>
      </div>
      @else
      <div class="alert alert-{{ $siswa->status == 2 ? 'success' : 'danger' }} py-3" role="alert">
        <h4 class="alert-heading text-light">
            {{ $pesan->judul }}, {{ $siswa->nama }}
        </h4>
        <p class="text-light">{{ $pesan->isi }}</p>
        <hr>
        <p class="mb-0 text-light">Pastikan anda sudah mengunduh bukti pendaftaran anda.</p>
      </div>
      @endif
      <div class="row mb-4">
        <div class="col-12 col-sm-12">
          <div class="card bg-primary mb-3">
            <div class="card-body">
              <h5 class="card-title text-light font-weight-medium">Pengumuman</h5>
              <p class="card-text text-light">Lihat hasil pengumuman @if($pengumuman->count() > 0)<span class="text-success">(Tersedia)</span>@else<span class="text-danger">(belum ada)</span>@endif</p>
              <div class="text-right">
                <a href="/siswa/pengumuman" class="btn btn-light">Buka</a>
              </div>
            </div>
          </div>
        </div>
        <!-- <div class="col-12 col-sm-6">
          <div class="card bg-warning mb-3">
            <div class="card-body">
              <h5 class="card-title text-light font-weight-medium">Daftar Ulang</h5>
              <p class="card-text text-light">Lakukan pendaftaran ulang jika anda dinyatakan lulus oleh admin</p>
              <div class="text-right">
                <a href="/siswa/daftar-ulang" class="btn btn-light">Buka</a>
              </div>
            </div>
          </div>
        </div> -->
      </div>
      <div class="text-center">
        <a href="{{ route('logout') }}" class="btn btn-danger">Keluar</a>
      </div>
    </div>
  </div>
</main>
@endsection