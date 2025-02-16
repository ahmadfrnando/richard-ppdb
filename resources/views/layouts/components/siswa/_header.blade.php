<header class="bg-primary py-3">
  <div class="container-lg d-flex justify-content-center">
    <div class="col-12 col-md-10 col-lg-8 d-flex justify-content-between p-0">
      <a href="/">
        <h5 class="mb-0 font-weight-medium text-light">CALON SISWA</h5>
        <p class="mb-0 font-weight-normal text-light uppercase">{{ $dataSekolah->nama_sekolah }}</p>
      </a>
      <img src="{{ asset('images/logo.svg') }}" height="40" alt="Logo {{ $dataSekolah->nama_sekolah }}">
    </div>
  </div>
</header>