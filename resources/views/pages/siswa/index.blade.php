{{-- UTIL --}}

@section('nav__item-siswa', 'active')

{{-- MAIN --}}

@extends('layouts.app')

@include('layouts.components.siswa._header')
@include('layouts.components.siswa._navbar')

@section('main')
<style>
  .timeline {
    position: relative;
    padding: 20px 0;
    list-style: none;
  }

  .timeline:before {
    content: '';
    position: absolute;
    top: 0;
    bottom: 0;
    left: 50%;
    width: 4px;
    background: #007bff;
    margin-left: -2px;
  }

  .timeline-item {
    position: relative;
    width: 50%;
    padding: 20px;
    box-sizing: border-box;
  }

  .timeline-item:nth-child(odd) {
    left: 0;
  }

  .timeline-item:nth-child(even) {
    left: 50%;
  }

  .timeline-item:before {
    content: "";
    position: absolute;
    top: 20px;
    right: -10px;
    width: 20px;
    height: 20px;
    background: #fff;
    border: 4px solid #007bff;
    border-radius: 50%;
    z-index: 1;
  }

  .timeline-item:nth-child(even):before {
    left: -10px;
  }

  .timeline-content {
    background: #f8f9fa;
    padding: 15px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
  }

  .progress {
    height: 10px;
  }
</style>
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
      <div class="alert alert-success py-3" role="alert">
        <h4 class="alert-heading text-light">
          {{ $pesan->judul }}, {{ $siswa->nama }}
        </h4>
        <p class="text-light">{{ $pesan->isi }}</p>
        <hr>
        <p class="mb-0 text-light">Pastikan anda sudah mengunduh bukti pendaftaran anda.</p>
      </div>
      @endif
      <div class="mt-4">
        <div class="progress mt-4">
          <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" style="width: {{ $siswa->id_status * 33.33 }}%;" aria-valuenow="{{ $siswa->status }}" aria-valuemin="1" aria-valuemax="3"></div>
        </div>
        <ul class="timeline mt-4">
          <li class="timeline-item">
            <div class="timeline-content">
              <h5><i class="fas fa-user-check"></i> Pendaftaran</h5>
              <p>Anda telah mendaftar di <strong>{{ $dataSekolah->nama_sekolah }}</strong>.</p>
              <small class="text-muted">Tanggal: {{ $siswa->created_at->translatedFormat('d F Y') }}</small>
            </div>
          </li>
          <li class="timeline-item">
            <div class="timeline-content">
              <h5><i class="fas fa-hourglass-half"></i> Konfirmasi</h5>
              <p>Menunggu konfirmasi dari admin <strong>{{ $dataSekolah->nama_sekolah }}</strong>.</p>
              <small class="text-muted">Tanggal: {{ $tahapan['tahap1']->created_at->translatedFormat('d F Y') }}</small>
            </div>
          </li>
          @if($tahapan['tahap2'])
          <li class="timeline-item">
            <div class="timeline-content">
              <h5><i class="fas fa-spinner"></i> Data Sedang Diproses</h5>
              <p>Admin sudah membuka data anda, silahkan tunggu pengumuman selanjutnya.</p>
              <small class="text-muted">Tanggal: {{ $tahapan['tahap2']->created_at->translatedFormat('d F Y') }}</small>
            </div>
          </li>
          @endif
          @if($tahapan['tahap3'])
          <li class="timeline-item">
            <div class="timeline-content">
              <h5><i class="fas fa-bullhorn"></i> Pengumuman</h5>
              <p>Admin sudah selesai memverifikasi data anda. Silahkan cek pengumuman untuk mengetahui hasil seleksi.</p>
              <small class="text-muted">Tanggal: {{ $tahapan['tahap3']->created_at->translatedFormat('d F Y') }}</small>
            </div>
          </li>
          @endif
        </ul>
      </div>
    </div>
  </div>
</main>
@endsection