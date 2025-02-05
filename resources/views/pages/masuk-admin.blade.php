{{-- UTIL --}}

@section('nav__item-masuk-admin', 'active')
@section('nav__icon-masuk-admin', 'opacity-100')

{{-- MAIN --}}

@extends('layouts.app')

@include('layouts.components.app._header')
@include('layouts.components.app._navbar')

@section('main')
<main>
  <div class="container-lg py-4">
    <div class="row justify-content-center">
      <div class="col-12 col-lg-9 px-0 px-md-3 mb-4">
        <div class="mb-md-3 px-3 px-md-5 py-4 py-md-5 bg-primary shadow-sm">
          <h4 class="text-white mb-0">Admin</h4>
          <h4 class="text-white uppercase">{{ $dataSekolah->nama_sekolah }}</h4>
          <h6 class="text-white font-weight-normal">TAHUN PELAJARAN 2024/2025</h6>
        </div>

        @if(session('error'))
        <div class="alert alert-danger mt-3" role="alert">
          {{ session('error') }}
        </div>
        @endif

        <div class="mb-3 px-3 px-md-5 py-4 py-md-5 bg-light shadow-sm">
          <form action="{{ route('login.store') }}" method="post">
            @csrf

            {{-- DATA SISWA --}}
            <div class="siswa__section mb-4">
              <div class="d-flex align-items-center pb-3">
                <span class="bg-primary mb-2 rounded-pill" style="height: 0.4rem; width: 1.6rem;"></span>
                <h5 class="ml-3">Masuk</h5>
              </div>
              <div class="form-group row">
                <label for="username" class="col-sm-4 col-form-label font-weight-normal">Username<span
                    class="text-danger">*</span></label>
                <div class="col-sm-8">
                  <input type="text" class="form-control  @error('username') is-invalid @enderror" id="username"
                    name="username" autocomplete="off" required>
                </div>
              </div>
              <div class="form-group row">
                <label for="password" class="col-sm-4 col-form-label font-weight-normal">Password<span
                    class="text-danger">*</span></label>
                <div class="col-sm-8">
                  <input type="password" class="form-control @error('password') is-invalid @enderror" id="password"
                    name="password" autocomplete="off" required>
                </div>
              </div>
            </div>

            {{-- SECTION KIRIM --}}
            <div class="kirim__section">
              <div class="d-flex flex-column space-y-2">
                <button class="btn btn-success py-2 w-100">Lanjutkan Masuk</button>
                <a href="/masuk" class="btn btn-success py-2 w-100 mt-2">Lanjutkan Masuk Sebagai Siswa</a>
              </div>
            </div>
          </form>
        </div>
      </div>

      @include('layouts.components.app._sidebar')

    </div>
  </div>
</main>
@endsection