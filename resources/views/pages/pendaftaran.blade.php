{{-- UTIL --}}

@section('nav__item-pendaftaran', 'active')
@section('nav__icon-pendaftaran', 'opacity-100')

{{-- MAIN --}}

@extends('layouts.app')

@include('layouts.components.app._header')
@include('layouts.components.app._navbar')

@section('main')
<main>
  <div class="container-lg py-4">
    <div class="row justify-content-center">
      <div class="col-12 col-lg-9 px-0 px-md-3 py-2">
        <div class="mb-md-3 px-3 px-md-5 py-4 py-md-5 bg-primary shadow-sm">
          <h4 class="text-white mb-0">Formulir Pendaftaran PPDB</h4>
          <h4 class="text-white uppercase">{{ $dataSekolah->nama_sekolah }}</h4>
          <h6 class="text-white font-weight-normal">
            TAHUN PELAJARAN <?php echo date('Y') ?>/<?php echo date('Y') + 1 ?>
          </h6>
        </div>
        <div class="mb-3 px-3 px-md-5 py-4 py-md-5 bg-light shadow-sm">
          <form action="{{ route('pendaftaran.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            {{-- DATA PRIBADI --}}
            <div class="siswa__section mb-4">
              <div class="d-flex align-items-center pb-3">
                <span class="bg-primary mb-2 rounded-pill" style="height: 0.4rem; width: 1.6rem;"></span>
                <h5 class="ml-3">Data Pribadi</h5>
              </div>
              <div class="form-group row">
                <label for="nama" class="col-sm-4 col-form-label font-weight-normal">Nama Pendaftar<span
                    class="text-danger">*</span></label>
                <div class="col-sm-8">
                  <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama"
                    autocomplete="off" required>
                  <small class="form-text text-muted">ex: <span class="text-dark">Richard Clooney Sitinjak</span></small>
                </div>
              </div>
              <div class="form-group row">
                <label for="nisn" class="col-sm-4 col-form-label font-weight-normal">NISN<span
                    class="text-danger">*</span></label>
                <div class="col-sm-8">
                  <input type="number" class="form-control @error('nisn') is-invalid @enderror" id="nisn" name="nisn"
                    autocomplete="off" required>
                  <small class="form-text text-muted">ex: <span class="text-dark">188718890</span></small>
                </div>
              </div>
              <div class="form-group row">
                <label for="tempat_lahir" class="col-sm-4 col-form-label font-weight-normal">Tempat Lahir<span
                    class="text-danger">*</span> </label>
                <div class="col-sm-8">
                  <input type="text" class="form-control @error('tempat_lahir') is-invalid @enderror" id="tempat_lahir"
                    name="tempat_lahir" autocomplete="off" required>
                  <small class="form-text text-muted">ex: <span class="text-dark">Medan</span></small>
                </div>
              </div>
              <div class="form-group row">
                <label for="tanggal_lahir" class="col-sm-4 col-form-label font-weight-normal">Tanggal Lahir<span
                    class="text-danger">*</span> </label>
                <div class="col-sm-8">
                  <div class="d-flex">
                    <input type="text" class="form-control datepicker  @error('tempat_lahir') is-invalid @enderror"
                      id="tanggal_lahir" name="tanggal_lahir" autocomplete="off" required>
                    <span class="position-absolute right-0" style="right: 1.6rem; top: 0.6rem;">
                      <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor"
                        class="bi bi-calendar" viewBox="0 0 16 16">
                        <path
                          d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z" />
                      </svg>
                    </span>
                  </div>
                  <small class="form-text text-muted">ex: <span class="text-dark">30-08-2004</span></small>
                </div>
              </div>
              <div class="form-group row">
                <label for="jenis_kelamin" class="col-sm-4 col-form-label font-weight-normal">Jenis Kelamin<span
                    class="text-danger">*</span></label>
                <div class="col-sm-8">
                  <div class="d-flex py-2">
                    <div class="form-check mr-2">
                      <input type="radio" class="form-check-input @error('jenis_kelamin') is-invalid @enderror"
                        id="jenis_kelamin-L" name="jenis_kelamin" value="L" autocomplete="off" required>
                      <label class="form-check-label" for="jenis_kelamin-L">
                        Laki - Laki
                      </label>
                    </div>
                    <div class="form-check mr-2">
                      <input type="radio" class="form-check-input @error('jenis_kelamin') is-invalid @enderror"
                        id="jenis_kelamin-P" name="jenis_kelamin" value="P" autocomplete="off" required>
                      <label class="form-check-label" for="jenis_kelamin-P">
                        Perempuan
                      </label>
                    </div>
                  </div>
                </div>
              </div>
              <div class="form-group row">
                <label for="alamat" class="col-sm-4 col-form-label font-weight-normal">Alamat Rumah<span
                    class="text-danger">*</span></label>
                <div class="col-sm-8">
                  <textarea class="form-control @error('alamat') is-invalid @enderror" id="alamat" name="alamat"
                    rows="3" autocomplete="off" required></textarea>
                </div>
              </div>
              <div class="form-group row">
                <label for="nomor_hp" class="col-sm-4 col-form-label font-weight-normal">Nomor HP<span
                    class="text-danger">*</span></label>
                <div class="col-sm-8">
                  <input type="text" class="form-control @error('nomor_hp') is-invalid @enderror" id="nomor_hp"
                    name="nomor_hp" autocomplete="off" required>
                  <small class="form-text text-muted">ex: <span class="text-dark">08123456789</span></small>
                </div>
              </div>
              <div class="form-group row">
                <label for="agama" class="col-sm-4 col-form-label font-weight-normal">Agama<span
                    class="text-danger">*</span></label>
                <div class="col-sm-8">
                  <select type="text" class="form-control @error('agama') is-invalid @enderror" id="agama" name="agama"
                    autocomplete="off" required>
                    <option value="">Pilih Agama</option>
                    <option value="Islam">Islam</option>
                    <option value="Protestan">Protestan</option>
                    <option value="Katolik">Katolik</option>
                    <option value="Hindu">Hindu</option>
                    <option value="Buddha">Buddha</option>
                  </select>
                </div>
              </div>
              <div class="form-group row">
                <label for="asal_sekolah" class="col-sm-4 col-form-label font-weight-normal">Asal Sekolah<span
                    class="text-danger">*</span></label>
                <div class="col-sm-8">
                  <input type="text" class="form-control @error('asal_sekolah') is-invalid @enderror" id="asal_sekolah"
                    name="asal_sekolah" autocomplete="off" required>
                  <small class="form-text text-muted">ex: <span class="text-dark">SMP N 1 Medan</span></small>
                </div>
              </div>
            </div>

            {{-- DATA ORANG TUA --}}
            <div class="orang__tua-section mb-4">
              <div class="d-flex align-items-center pb-3">
                <span class="bg-primary mb-2 rounded-pill" style="height: 0.4rem; width: 1.6rem;"></span>
                <h5 class="ml-3">Data Orang Tua</h5>
              </div>
              <div class="form-group row">
                <label for="nama_ayah" class="col-sm-4 col-form-label font-weight-normal">Nama Ayah<span
                    class="text-danger">*</span></label>
                <div class="col-sm-8">
                  <input type="text" class="form-control @error('nama_ayah') is-invalid @enderror" id="nama_ayah"
                    name="nama_ayah" autocomplete="off" required>
                  <small class="form-text text-muted">ex: <span class="text-dark">Suparjo</span></small>
                </div>
              </div>
              <div class="form-group row">
                <label for="umur_ayah" class="col-sm-4 col-form-label font-weight-normal">Umur Ayah<span
                    class="text-danger">*</span></label>
                <div class="col-sm-8">
                  <input type="number" class="form-control @error('umur_ayah') is-invalid @enderror" id="umur_ayah"
                    name="umur_ayah" autocomplete="off" required>
                  <small class="form-text text-muted">ex: <span class="text-dark">19</span></small>
                </div>
              </div>
              <div class="form-group row">
                <label for="pendidikan_ayah" class="col-sm-4 col-form-label font-weight-normal">Pendidikan Ayah<span
                    class="text-danger">*</span></label>
                <div class="col-sm-8">
                  <select class="form-control @error('pendidikan_ayah') is-invalid @enderror" id="pendidikan_ayah"
                    name="pendidikan_ayah" autocomplete="off" required>
                    <option value="">-- Pilih Pendidikan Ayah --</option>
                    <option value="SD">SD</option>
                    <option value="SMP">SMP</option>
                    <option value="SLTA">SLTA</option>
                    <option value="Sarjana">Sarjana</option>
                  </select>
                  <small class="form-text text-muted">nb: <span class="text-dark">( Pilih pendidikan seorang ayah
                      )</span></small>
                </div>
              </div>
              <div class="form-group row">
                <label for="pekerjaan_ayah" class="col-sm-4 col-form-label font-weight-normal">Pekerjaan Ayah<span
                    class="text-danger">*</span></label>
                <div class="col-sm-8">
                  <select class="form-control @error('pekerjaan_ayah') is-invalid @enderror" id="pekerjaan_ayah"
                    name="pekerjaan_ayah" autocomplete="off" required>
                    <option value="">-- Pilih Pekerjaan Ayah --</option>
                    <option value="Wiraswasta">Wiraswasta</option>
                    <option value="PNS">PNS</option>
                    <option value="Pegawai Swasta">Pegawai Swasta</option>
                    <option value="Petani">Petani</option>
                    <option value="Nelayan">Nelayan</option>
                    <option value="Buruh">Buruh</option>
                    <option value="Guru">Guru</option>
                    <option value="Dosen">Dosen</option>
                  </select>
                  <small class="form-text text-muted">nb: <span class="text-dark">( Pilih pekerjaan seorang ayah
                      )</span></small>
                </div>
              </div>
              <div class="form-group row">
                <label for="nama_ibu" class="col-sm-4 col-form-label font-weight-normal">Nama Ibu<span
                    class="text-danger">*</span></label>
                <div class="col-sm-8">
                  <input type="text" class="form-control @error('nama_ibu') is-invalid @enderror" id="nama_ibu"
                    name="nama_ibu" autocomplete="off" required>
                  <small class="form-text text-muted">ex: <span class="text-dark">Ekowati</span></small>
                </div>
              </div>
              <div class="form-group row">
                <label for="umur_ibu" class="col-sm-4 col-form-label font-weight-normal">Umur Ibu<span
                    class="text-danger">*</span></label>
                <div class="col-sm-8">
                  <input type="number" class="form-control @error('umur_ibu') is-invalid @enderror" id="umur_ibu"
                    name="umur_ibu" autocomplete="off" required>
                  <small class="form-text text-muted">ex: <span class="text-dark">30</span></small>
                </div>
              </div>
              <div class="form-group row">
                <label for="pendidikan_ibu" class="col-sm-4 col-form-label font-weight-normal">Pendidikan Ibu<span
                    class="text-danger">*</span></label>
                <div class="col-sm-8">
                  <select class="form-control @error('pendidikan_ibu') is-invalid @enderror" id="pendidikan_ibu"
                    name="pendidikan_ibu" autocomplete="off" required>
                    <option value="">-- Pilih Pendidikan Ibu --</option>
                    <option value="SD">SD</option>
                    <option value="SMP">SMP</option>
                    <option value="SLTA">SLTA</option>
                    <option value="Sarjana">Sarjana</option>
                  </select>
                  <small class="form-text text-muted">nb: <span class="text-dark">( Pilih pendidikan seorang ibu
                      )</span></small>
                </div>
              </div>
              <div class="form-group row">
                <label for="pekerjaan_ibu" class="col-sm-4 col-form-label font-weight-normal">Pekerjaan Ibu<span
                    class="text-danger">*</span></label>
                <div class="col-sm-8">
                  <select class="form-control @error('pekerjaan_ibu') is-invalid @enderror" id="pekerjaan_ibu"
                    name="pekerjaan_ibu" autocomplete="off" required>
                    <option value="">-- Pilih Pekerjaan Ibu --</option>
                    <option value="Ibu Rumah Tangga">Ibu Rumah Tangga</option>
                    <option value="Wiraswasta">Wiraswasta</option>
                    <option value="PNS">PNS</option>
                    <option value="Pegawai Swasta">Pegawai Swasta</option>
                    <option value="Petani">Petani</option>
                    <option value="Nelayan">Nelayan</option>
                    <option value="Buruh">Buruh</option>
                    <option value="Guru">Guru</option>
                    <option value="Dosen">Dosen</option>
                  </select>
                  <small class="form-text text-muted">nb: <span class="text-dark">( Pilih pekerjaan seorang ibu
                      )</span></small>
                </div>
              </div>
              <div class="form-group row">
                <label for="nomor_hp_ortu" class="col-sm-4 col-form-label font-weight-normal">Nomor HP Orang Tua<span
                    class="text-danger">*</span></label>
                <div class="col-sm-8">
                  <input type="number" class="form-control @error('nomor_hp_ortu') is-invalid @enderror"
                    id="nomor_hp_ortu" name="nomor_hp_ortu" autocomplete="off" required>
                  <small class="form-text text-muted">ex: <span class="text-dark">08123456789</span></small>
                </div>
              </div>
              <div class="form-group row">
                <label for="alamat_orang_tua" class="col-sm-4 col-form-label font-weight-normal">Alamat Rumah Orang
                  Tua<span class="text-danger">*</span></label>
                <div class="col-sm-8">
                  <textarea class="form-control @error('alamat_orang_tua') is-invalid @enderror" id="alamat_orang_tua"
                    name="alamat_orang_tua" rows="3" autocomplete="off" required></textarea>
                </div>
              </div>
            </div>

            {{-- DATA TAMBAHAN --}}
            <div class="siswa__section mb-4">
              <div class="d-flex align-items-center pb-3">
                <span class="bg-primary mb-2 rounded-pill" style="height: 0.4rem; width: 1.6rem;"></span>
                <h5 class="ml-3">Data Tambahan</h5>
              </div>
              <div class="form-group row">
                <label for="nilai_skhu" class="col-sm-4 col-form-label font-weight-normal">Nilai SKHU<span
                    class="text-danger">*</span></label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" id="nilai_skhu" name="nilai_skhu" autocomplete="off" required>
                  <small class="form-text text-muted">ex: <span class="text-dark">8.9</span></small>
                </div>
              </div>
              <div class="form-group row">
                <label for="rata_rata_skhu" class="col-sm-4 col-form-label font-weight-normal">Nilai Rata - Rata SKHU<span
                    class="text-danger">*</span></label>
                <div class="col-sm-8">
                  <input type="number" class="form-control" id="rata_rata_skhu" name="rata_rata_skhu" autocomplete="off" required>
                  <small class="form-text text-muted">ex: <span class="text-dark">8</span></small>
                </div>
              </div>
              <div class="form-group row">
                <label for="nomor_ijazah" class="col-sm-4 col-form-label font-weight-normal">Nomor Ijazah<span
                    class="text-danger">*</span></label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" id="nomor_ijazah" name="nomor_ijazah" autocomplete="off">
                  <small class="form-text text-muted">ex: <span class="text-dark">NK-299018798</span></small>
                </div>
              </div>
              <div class="form-group row">
                <label for="nilai_ijazah" class="col-sm-4 col-form-label font-weight-normal">Nilai Ijazah<span
                    class="text-danger">*</span></label>
                <div class="col-sm-8">
                  <input type="number" class="form-control" id="nilai_ijazah" name="nilai_ijazah" autocomplete="off">
                  <small class="form-text text-muted">ex: <span class="text-dark">19</span></small>
                </div>
              </div>
              <div class="form-group row">
                <label for="rata_rata_ijazah" class="col-sm-4 col-form-label font-weight-normal">Nilai Rata - Rata Ijazah<span
                    class="text-danger">*</span></label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" id="rata_rata_ijazah" name="rata_rata_ijazah" autocomplete="off">
                  <small class="form-text text-muted">ex: <span class="text-dark">8.8</span></small>
                </div>
              </div>
            </div>

            <div class="siswa__section mb-4">
              <div class="d-flex align-items-center pb-3">
                <span class="bg-primary mb-2 rounded-pill" style="height: 0.4rem; width: 1.6rem;"></span>
                <h5 class="ml-3">File Unggahan (JPG, JPEG, PNG, PDF Maks. 2MB)</h5>
              </div>
              <div class="form-group row">
                <label for="file_ijazah" class="col-sm-4 col-form-label font-weight-normal">Upload Ijazah<span
                    class="text-danger">*</span></label>
                <div class="col-sm-8">
                  <div class="custom-file">
                    <input type="file" class="custom-file-input" id="file_ijazah" name="file_ijazah" autocomplete="off" required onchange="document.getElementById('file_ijazah_label').innerHTML = this.value.split('\\').pop();">
                    <label class="custom-file-label" id="file_ijazah_label" for="file_ijazah">Pilih File</label>
                  </div>
                </div>
              </div>
              <div class="form-group row mt-20">
                <label for="file_skhu" class="col-sm-4 col-form-label font-weight-normal">Upload SKHU<span
                    class="text-danger">*</span></label>
                <div class="col-sm-8">
                  <div class="custom-file">
                  <input type="file" class="custom-file-input" id="file_skhu" name="file_skhu" autocomplete="off" required onchange="document.getElementById('file_skhu_label').innerHTML = this.value.split('\\').pop();">
                  <label class="custom-file-label" id="file_skhu_label" for="file_skhu">Pilih File</label>
                  </div>
                </div>
              </div>
              <div class="form-group row mt-20">
                <label for="file_id" class="col-sm-4 col-form-label font-weight-normal">Upload KTP/Kartu Pelajar<span
                    class="text-danger">*</span></label>
                <div class="col-sm-8">
                  <div class="custom-file">
                  <input type="file" class="custom-file-input" id="file_id" name="file_id" autocomplete="off" required onchange="document.getElementById('file_id_label').innerHTML = this.value.split('\\').pop();">
                  <label class="custom-file-label" id="file_id_label">Pilih File</label>
                  </div>
                </div>
              </div>
              <div class="form-group row mt-20">
                <label for="file_kk" class="col-sm-4 col-form-label font-weight-normal">Upload Kartu Keluarga<span
                    class="text-danger">*</span></label>
                <div class="col-sm-8">
                  <div class="custom-file">
                  <input type="file" class="custom-file-input" id="file_kk" name="file_kk" autocomplete="off" required onchange="document.getElementById('file_kk_label').innerHTML = this.value.split('\\').pop();">
                  <label class="custom-file-label" id="file_kk_label">Pilih File</label>
                  </div>
                </div>
              </div>
              <div class="form-group row mt-20">
                <label for="file_pas_foto" class="col-sm-4 col-form-label font-weight-normal">Upload Pas Foto<span
                    class="text-danger">*</span></label>
                <div class="col-sm-8">
                  <div class="custom-file">
                  <input type="file" class="custom-file-input" id="file_pas_foto" name="file_pas_foto" autocomplete="off" required onchange="document.getElementById('file_pas_foto_label').innerHTML = this.value.split('\\').pop();">
                  <label class="custom-file-label" id="file_pas_foto_label">Pilih File</label>
                  </div>
                </div>
              </div>
            </div>

            {{-- SECTION KIRIM --}}
            <div class="kirim__section">
              <div class="mb-4">
                <h6 class="font-weight-semibold">PERHATIAN :</h6>
                <small class="m-0 d-block">- Isian dengan tanda (<span class="text-danger">*</span>) adalah wajib
                  diisi.</small>
                <small class="m-0 d-block">- Silahkan cek kembali seluruh data yang sudah diisi.</small>
                <small class="m-0 d-block">- Dengan mengirim data ini, saya menyatakan sudah mengisi data dengan
                  benar dan
                  lengkap.</small>
              </div>
              <button type="submit" class="btn btn-success py-2 w-100">Kirim Formulir Pendaftaran</button>
            </div>
          </form>
        </div>
      </div>
      @include('layouts.components.app._sidebar')
    </div>
  </div>
</main>
@endsection