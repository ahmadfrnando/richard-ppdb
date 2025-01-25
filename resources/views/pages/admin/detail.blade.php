@extends('layouts.admin')
@section('nav__item-admin', 'active')

@section('title', 'Detail Siswa')

@section('content')
<div class="row">
  <div class="col-lg- col-sm-6 col-12">
    <div class="card card-statistic-1">
      <div class="card-icon bg-primary">
        <i class="far fa-user"></i>
      </div>
      <div class="card-wrap">
        <div class="card-header">
          <h4>Total Pendaftar</h4>
        </div>
        <div class="card-body">
          {{ $dataSiswa->count() }}
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg- col-sm-6 col-12">
    <div class="card card-statistic-1">
      <div class="card-icon bg-info">
        <i class="far fa-user"></i>
      </div>
      <div class="card-wrap">
        <div class="card-header">
          <h4>Total Pengumuman</h4>
        </div>
        <div class="card-body">
          {{ $pengumuman->count() }}
        </div>
      </div>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-12">
    <div class="container mt-5">
      <div class="card">
        <div class="card-header bg-primary text-white">
          <h3>Detail Pendaftaran Siswa</h3>
        </div>
        <div class="card-body">
          <table class="table table-striped">
            <tr>
              <th>Nomor Pendaftaran</th>
              <td>{{ $siswa->nomor_pendaftar }}</td>
            </tr>
            <tr>
              <th>Nama</th>
              <td>{{ $siswa->nama }}</td>
            </tr>
            <tr>
              <th>NISN</th>
              <td>{{ $siswa->nisn }}</td>
            </tr>
            <tr>
              <th>Tempat Lahir</th>
              <td>{{ $siswa->tempat_lahir }}</td>
            </tr>
            <tr>
              <th>Tanggal Lahir</th>
              <td>{{ $siswa->tanggal_lahir }}</td>
            </tr>
            <tr>
              <th>Jenis Kelamin</th>
              <td>{{ $siswa->jenis_kelamin }}</td>
            </tr>
            <tr>
              <th>Alamat</th>
              <td>{{ $siswa->alamat }}</td>
            </tr>
            <tr>
              <th>Asal Sekolah</th>
              <td>{{ $siswa->asal_sekolah }}</td>
            </tr>
            <tr>
              <th>Nomor HP</th>
              <td>{{ $siswa->nomor_hp }}</td>
            </tr>
            <tr>
              <th>Agama</th>
              <td>{{ $siswa->agama }}</td>
            </tr>
            <tr>
              <th>Nama Ayah</th>
              <td>{{ $siswa->nama_ayah }}</td>
            </tr>
            <tr>
              <th>Umur Ayah</th>
              <td>{{ $siswa->umur_ayah }}</td>
            </tr>
            <tr>
              <th>Pekerjaan Ayah</th>
              <td>{{ $siswa->pekerjaan_ayah }}</td>
            </tr>
            <tr>
              <th>Pendidikan Ayah</th>
              <td>{{ $siswa->pendidikan_ayah }}</td>
            </tr>
            <tr>
              <th>Nama Ibu</th>
              <td>{{ $siswa->nama_ibu }}</td>
            </tr>
            <tr>
              <th>Umur Ibu</th>
              <td>{{ $siswa->umur_ibu }}</td>
            </tr>
            <tr>
              <th>Pekerjaan Ibu</th>
              <td>{{ $siswa->pekerjaan_ibu }}</td>
            </tr>
            <tr>
              <th>Pendidikan Ibu</th>
              <td>{{ $siswa->pendidikan_ibu }}</td>
            </tr>
            <tr>
              <th>Alamat Orang Tua</th>
              <td>{{ $siswa->alamat_orang_tua }}</td>
            </tr>
            <tr>
              <th>Nomor HP Orang Tua</th>
              <td>{{ $siswa->nomor_hp_ortu }}</td>
            </tr>
            <tr>
              <th>Nilai SKHU</th>
              <td>{{ $siswa->nilai_skhu }}</td>
            </tr>
            <tr>
              <th>Nomor Ijazah</th>
              <td>{{ $siswa->nomor_ijazah }}</td>
            </tr>
            <tr>
              <th>Nilai Ijazah</th>
              <td>{{ $siswa->nilai_ijazah }}</td>
            </tr>
            <tr>
              <th>Status</th>
              <td>{{ $siswa->status }}</td>
            </tr>
          </table>
          <div class="text-center mt-4">
            <a href="{{ url('/admin') }}" class="btn btn-secondary">Kembali</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection