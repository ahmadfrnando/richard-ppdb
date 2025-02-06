@extends('layouts.admin')
@section('nav__item-admin-konfirmasi', 'active')

@section('title', 'Konfirmasi')

@section('content')
<div class="card">
  <div class="p-4">
    <form action="{{ route('admin.siswa.status', ['id' => $konfirmasi->id]) }}" method="post">
      @csrf
      <button type="button" onclick="window.history.back();" class="btn btn-secondary ml-2">Kembali</button>
      <button type="submit" value="100" name="status" class="btn btn-success ml-2">Terima</button>
      <button type="submit" value="101" name="status" class="btn btn-danger ml-2">Tolak</button>
    </form>
  </div>
  <div class="card-header bg-primary text-white">
    <h3>Detail Pendaftaran Siswa</h3>
  </div>
  <div class="card-body">
    <div class="row">
      <div class="col-md-6">
        <table class="table table-striped">
          <tr>
            <th>Nomor Pendaftaran</th>
            <td>{{ $konfirmasi->nomor_pendaftaran }}</td>
          </tr>
          <tr>
            <th>Nama</th>
            <td>{{ $konfirmasi->nama }}</td>
          </tr>
          <tr>
            <th>NISN</th>
            <td>{{ $konfirmasi->nisn }}</td>
          </tr>
          <tr>
            <th>Tempat Lahir</th>
            <td>{{ $konfirmasi->tempat_lahir }}</td>
          </tr>
          <tr>
            <th>Tanggal Lahir</th>
            <td>{{ $konfirmasi->tanggal_lahir }}</td>
          </tr>
          <tr>
            <th>Jenis Kelamin</th>
            <td>{{ $konfirmasi->jenis_kelamin }}</td>
          </tr>
          <tr>
            <th>Alamat</th>
            <td>{{ $konfirmasi->alamat }}</td>
          </tr>
          <tr>
            <th>Asal Sekolah</th>
            <td>{{ $konfirmasi->asal_sekolah }}</td>
          </tr>
          <tr>
            <th>Nomor HP</th>
            <td>{{ $konfirmasi->nomor_hp }}</td>
          </tr>
        </table>
      </div>
      <div class="col-md-6">
        <table class="table table-striped">
          <tr>
            <th>Agama</th>
            <td>{{ $konfirmasi->agama }}</td>
          </tr>
          <tr>
            <th>Nama Ayah</th>
            <td>{{ $konfirmasi->nama_ayah }}</td>
          </tr>
          <tr>
            <th>Umur Ayah</th>
            <td>{{ $konfirmasi->umur_ayah }}</td>
          </tr>
          <tr>
            <th>Pekerjaan Ayah</th>
            <td>{{ $konfirmasi->pekerjaan_ayah }}</td>
          </tr>
          <tr>
            <th>Pendidikan Ayah</th>
            <td>{{ $konfirmasi->pendidikan_ayah }}</td>
          </tr>
          <tr>
            <th>Nama Ibu</th>
            <td>{{ $konfirmasi->nama_ibu }}</td>
          </tr>
          <tr>
            <th>Umur Ibu</th>
            <td>{{ $konfirmasi->umur_ibu }}</td>
          </tr>
          <tr>
            <th>Pekerjaan Ibu</th>
            <td>{{ $konfirmasi->pekerjaan_ibu }}</td>
          </tr>
          <tr>
            <th>Pendidikan Ibu</th>
            <td>{{ $konfirmasi->pendidikan_ibu }}</td>
          </tr>
        </table>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12 text-center mt-4">
        <a href="{{ route('admin.berkas.download', ['id' => $konfirmasi->id, 'berkas' => 'id']) }}" class="btn btn-warning">Download Berkas KTP/Kartu Pelajar</a>
        <a href="{{ route('admin.berkas.download', ['id' => $konfirmasi->id, 'berkas' => 'kk']) }}" class="btn btn-warning">Download Berkas Kartu Keluarga</a>
        <a href="{{ route('admin.berkas.download', ['id' => $konfirmasi->id, 'berkas' => 'ijazah']) }}" class="btn btn-warning">Download Berkas Ijazah</a>
        <a href="{{ route('admin.berkas.download', ['id' => $konfirmasi->id, 'berkas' => 'skhu']) }}" class="btn btn-warning">Download Berkas SKHU</a>
        <a href="{{ route('admin.berkas.download', ['id' => $konfirmasi->id, 'berkas' => 'pas_foto']) }}" class="btn btn-warning">Download Pas Foto</a>
      </div>
    </div>
  </div>

  @endsection