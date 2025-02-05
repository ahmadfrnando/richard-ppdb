<header class="bg-light py-3">
  <div class="container-lg d-flex justify-content-between">
    <a class="d-flex" href="/">
      <img src="{{ asset('images/logo.png') }}" height="56" alt="Logo {{ $dataSekolah->nama_sekolah }}">
      <div class="ml-3">
        <h3 class="mb-0 font-weight-bold">PPDB ONLINE</h3>
        <h6 class="mb-0 font-weight-semibold uppercase">{{ $dataSekolah->nama_sekolah }}</h6>
      </div>
    </a>
    <div class="d-none align-items-center d-sm-flex">
      <i class="far fa-clock mt-2 mr-3" style="font-size: 1.8rem"></i>
      <div>
        <small>WAKTU LAYANAN</small>
        <h6 class="mb-0">{{ substr($dataSekolah->jam_buka, 0, 5) }} - {{ substr($dataSekolah->jam_tutup, 0, 5) }}</h6>
      </div>
    </div>
  </div>
  </div>
</header>