@extends('layouts.admin')
@section('nav__item-admin-konfirmasi', 'active')

@section('title', 'Konfirmasi')

@section('content')
  <div class="card">
    <div class="card-header bg-primary text-white">
      <h3>Detail Pendaftaran Siswa</h3>
    </div>
    <div class="card-body">
      <table class="table table-striped">
        <tr>
          <th>Nomor Pendaftaran</th>
          <td>{{ $konfirmasi->nomor_pendaftar }}</td>
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
        <tr>
          <th>Alamat Orang Tua</th>
          <td>{{ $konfirmasi->alamat_orang_tua }}</td>
        </tr>
        <tr>
          <th>Nomor HP Orang Tua</th>
          <td>{{ $konfirmasi->nomor_hp_ortu }}</td>
        </tr>
        <tr>
          <th>Nilai SKHU</th>
          <td>{{ $konfirmasi->nilai_skhu }}</td>
        </tr>
        <tr>
          <th>Nomor Ijazah</th>
          <td>{{ $konfirmasi->nomor_ijazah }}</td>
        </tr>
        <tr>
          <th>Nilai Ijazah</th>
          <td>{{ $konfirmasi->nilai_ijazah }}</td>
        </tr>
        <tr>
          <th>Status</th>
          <td>{{ $konfirmasi->status }}</td>
        </tr>
      </table>
      <div class="text-center mt-4">
        <a href="{{ url('/admin/konfirmasi') }}" class="btn btn-secondary">Kembali</a>
      </div>
    </div>
  </div>

@endsection