<div id="sidebar" class="col-12 col-lg-3 mb-4">
  <div class="row">
    <div class="col-12 mb-4">
      <div class="d-flex align-items-center mb-3">
        <span class="bg-primary mb-2 rounded-pill" style="height: 0.4rem; width: 1.6rem;"></span>
        <h5 class="ml-3">Cek Pendaftaran:</h5>
      </div>
      <form action="/detail/search" method="post">
        @csrf
        <div class="d-flex justify-content-center justify-content-lg-start">
          <input type="text" class="cek__pendaftaran-input form-control mr-1" id="nisn" name="nisn" autocomplete="off"
            placeholder="Masukkan NISN">
          <button type="submit" class="btn btn-success ml-1">
            <i class="fas fa-search text-light"></i>
          </button>
      </form>
    </div>
  </div>
  <div class="col-lg-12 col-sm-6 col-12 mb-4">
    <div class="d-flex align-items-center mb-3">
      <span class="bg-primary mb-2 rounded-pill" style="height: 0.4rem; width: 1.6rem;"></span>
      <h5 class="ml-3">Alur PPDB Online:</h5>
    </div>
    <div class="">
      <div class="d-flex mb-3">
        <div class="bg-primary text-white rounded-circle mr-2"
          style="height: 1.46rem; width: 1.6rem;padding: 0rem 0.56rem;">1
        </div>
        <p class="m-0">Mulai Pendaftaran</p>
      </div>
      <div class="d-flex mb-3">
        <div class="bg-primary text-white rounded-circle mr-2"
          style="height: 1.46rem; width: 1.6rem;padding: 0rem 0.56rem;">2
        </div>
        <p class="m-0">Mengisi Formulir</p>
      </div>
      <div class="d-flex mb-3">
        <div class="bg-primary text-white rounded-circle mr-2"
          style="height: 1.46rem; width: 1.6rem;padding: 0rem 0.56rem;">3
        </div>
        <p class="m-0">Verifikasi Pendaftaran</p>
      </div>
      <div class="d-flex mb-3">
        <div class="bg-primary text-white rounded-circle mr-2"
          style="height: 1.46rem; width: 1.6rem;padding: 0rem 0.56rem;">3
        </div>
        <p class="m-0">Masuk Portal PPDB</p>
      </div>
      <div class="d-flex mb-3">
        <div class="bg-primary text-white rounded-circle mr-2"
          style="height: 1.46rem; width: 1.6rem;padding: 0rem 0.56rem;">4
        </div>
        <p class="m-0">Info Pengumuman</p>
      </div>
    </div>
  </div>
</div>
</div>