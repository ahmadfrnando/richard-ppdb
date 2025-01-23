@extends('layouts.admin')
@section('nav__item-admin-siswa', 'active')

@section('title', 'Data Pendaftar')

@section('content')
<div class="card mb-4">
  <div class="card-header">
    <h4>Tambah Pendaftar</h4>
  </div>
  <div class="card-body">
    <form action="{{ route('admin.siswa.store') }}" method="post">
      @csrf
      <div class="row">
        <div class="col-12 col-md-6">
          <div class="form-group mb-3">
            <label for="nama">Nama Pendaftar<span class="text-danger">*</span></label>
            <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama"
              autocomplete="off" required>
            <small class="form-text text-muted">ex: <span class="text-dark">Richard Clooney</span></small>
          </div>
          <div class="form-group">
            <label for="nisn">NISN<span class="text-danger">*</span></label>
            <input type="text" class="form-control @error('nisn') is-invalid @enderror" id="nisn" name="nisn"
              autocomplete="off" required>
            <small class="form-text text-muted">nb: <span class="text-dark">( Masukkan NISN yang valid untuk
                digunakan tahap selanjutnya )</span></small>
          </div>
          <div class="form-group mb-3">
            <label for="tempat_lahir">Tempat Lahir<span class="text-danger">*</span></label>
            <input type="text" class="form-control @error('tempat_lahir') is-invalid @enderror" id="tempat_lahir"
              name="tempat_lahir" autocomplete="off" required>
            <small class="form-text text-muted">ex: <span class="text-dark">Medan</span></small>
          </div>
          <div class="form-group mb-3">
            <label for="tanggal_lahir">Tanggal Lahir<span class="text-danger">*</span></label>
            <input type="text" class="form-control datepicker  @error('tempat_lahir') is-invalid @enderror"
              id="tanggal_lahir" name="tanggal_lahir" autocomplete="off" required>
          </div>
          <div class="form-group mb-3">
            <label for="jenis_kelamin">Jenis Kelamin<span class="text-danger">*</span></label>
            <div class="d-flex">
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
          <div class="form-group">
            <label for="alamat">Alamat Rumah<span class="text-danger">*</span></label>
            <textarea class="form-control @error('jenis_kelamin') is-invalid @enderror" id="alamat" name="alamat"
              rows="3" autocomplete="off" required></textarea>
          </div>
          <div class="form-group">
            <label for="nomor_hp">Nomor HP<span class="text-danger">*</span></label>
            <input type="text" class="form-control @error('nomor_hp') is-invalid @enderror" id="nomor_hp"
              name="nomor_hp" autocomplete="off" required>
            <small class="form-text text-muted">ex: <span class="text-dark">08123456789</span></small>
          </div>
          <div class="form-group">
            <label for="asal_sekolah">Asal Sekolah<span class="text-danger">*</span></label>
            <input type="text" class="form-control @error('asal_sekolah') is-invalid @enderror" id="asal_sekolah"
              name="asal_sekolah" autocomplete="off" required>
            <small class="form-text text-muted">ex: <span class="text-dark">SMP N 1 Sukoharjo</span></small>
          </div>
          <div class="form-group">
            <label for="agama">agama<span class="text-danger">*</span></label>
            <select class="form-control @error('agama') is-invalid @enderror" id="agama"
              name="agama" autocomplete="off" required>
              <option value="">-- Pilih Agama --</option>
              <option value="Islam">Islam</option>
              <option value="Protestan">Protestan</option>
              <option value="Katolik">Katolik</option>
              <option value="Hindu">Hindu</option>
              <option value="Buddha">Buddha</option>
            </select>
          </div>
          <div class="form-group">
            <label for="nilai_skhu">Nilai SKHU<span class="text-danger">*</span></label>
            <input type="text" class="form-control @error('nilai_skhu') is-invalid @enderror" id="nilai_skhu"
              name="nilai_skhu" autocomplete="off" required>
          </div>
          <div class="form-group">
            <label for="rata_rata_skhu">Nilai Rata - Rata SKHU<span class="text-danger">*</span></label>
            <input type="text" class="form-control @error('rata_rata_skhu') is-invalid @enderror" id="rata_rata_skhu"
              name="rata_rata_skhu" autocomplete="off" required>
          </div>
          <div class="form-group">
            <label for="nomor_ijazah">Nomor Ijazah<span class="text-danger">*</span></label>
            <input type="text" class="form-control @error('nomor_ijazah') is-invalid @enderror" id="nomor_ijazah"
              name="nomor_ijazah" autocomplete="off" required>
          </div>
          <div class="form-group">
            <label for="nilai_ijazah">Nilai Ijazah<span class="text-danger">*</span></label>
            <input type="text" class="form-control @error('nilai_ijazah') is-invalid @enderror" id="nilai_ijazah"
              name="nilai_ijazah" autocomplete="off" required>
          </div>
          <div class="form-group">
            <label for="rata_rata_ijazah">Nilai Rata - Rata Ijazah<span class="text-danger">*</span></label>
            <input type="text" class="form-control @error('rata_rata_ijazah') is-invalid @enderror" id="rata_rata_ijazah"
              name="rata_rata_ijazah" autocomplete="off" required>
          </div>
        </div>
        <div class="col-12 col-md-6">
          <div class="form-group">
            <label for="nama_ayah">Nama Ayah<span class="text-danger">*</span></label>
            <input type="text" class="form-control @error('nama_ayah') is-invalid @enderror" id="nama_ayah"
              name="nama_ayah" autocomplete="off" required>
            <small class="form-text text-muted">ex: <span class="text-dark">Suparjo</span></small>
          </div>
          <div class="form-group">
            <label for="umur_ayah">Umur Ayah<span class="text-danger">*</span></label>
            <input type="number" class="form-control @error('umur_ayah') is-invalid @enderror" id="umur_ayah"
              name="umur_ayah" autocomplete="off" required>
            <small class="form-text text-muted">ex: <span class="text-dark">30</span></small>
          </div>
          <div class="form-group">
            <label for="pendidikan_ayah">Pendidikan Ayah<span class="text-danger">*</span></label>
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
          <div class="form-group">
            <label for="pekerjaan_ayah">Pekerjaan Ayah<span class="text-danger">*</span></label>
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
          <div class="form-group">
            <label for="nama_ibu">Nama Ibu<span class="text-danger">*</span></label>
            <input type="text" class="form-control @error('nama_ibu') is-invalid @enderror" id="nama_ibu"
              name="nama_ibu" autocomplete="off" required>
            <small class="form-text text-muted">ex: <span class="text-dark">Ekowati</span></small>
          </div>
          <div class="form-group">
            <label for="umur_ibu">Umur Ibu<span class="text-danger">*</span></label>
            <input type="number" class="form-control @error('umur_ibu') is-invalid @enderror" id="umur_ibu"
              name="umur_ibu" autocomplete="off" required>
            <small class="form-text text-muted">ex: <span class="text-dark">30</span></small>
          </div>
          <div class="form-group">
            <label for="pendidikan_ibu">Pendidikan Ibu<span class="text-danger">*</span></label>
            <select class="form-control @error('pendidikan_ibu') is-invalid @enderror" id="pendidikan_ibu"
              name="pendidikan_ibu" autocomplete="off" required>
              <option value="">-- Pilih Pendidikan Ibu --</option>
              <option value="SD">SD</option>
              <option value="SMP">SMP</option>
              <option value="SLTA">SLTA</option>
              <option value="Sarjana">Sarjana</option>
            </select>
            <small class="form-text text-muted">nb: <span class="text-dark">( Pilih pendidikan seorang ayah
                )</span></small>
          </div>
          <div class="form-group">
            <label for="pekerjaan_ibu">Pekerjaan Ibu<span class="text-danger">*</span></label>
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
          <div class="form-group">
            <label for="nomor_hp_ortu">Nomor HP Orang Tua<span class="text-danger">*</span></label>
            <input type="text" class="form-control @error('nomor_hp_ortu') is-invalid @enderror" id="nomor_hp_ortu"
              name="nomor_hp_ortu" autocomplete="off" required>
            <small class="form-text text-muted">ex: <span class="text-dark">08123456789</span></small>
          </div>
          <div class="form-group">
            <label for="alamat_orang_tua">Alamat Rumah Orang
              Tua<span class="text-danger">*</span></label>
            <textarea class="form-control @error('alamat_orang_tua') is-invalid @enderror" id="alamat_orang_tua"
              name="alamat_orang_tua" rows="3" autocomplete="off" required></textarea>
          </div>
        </div>
      </div>
      <button type="submit" class="btn btn-success py-2 mt-4 w-100">Kirim Formulir Pendaftaran</button>
    </form>
  </div>
</div>

@endsection