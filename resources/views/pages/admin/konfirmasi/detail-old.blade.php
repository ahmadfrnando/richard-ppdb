@extends('layouts.admin')
@section('nav__item-admin-konfirmasi', 'active')

@section('title', 'Konfirmasi')

@section('content')
<div class="card mb-4">
  <div class="card-header">
    <h4>Detail Konfirmasi</h4>
  </div>
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
        <a href="{{ url('/admin/konfirmasi') }}" class="btn btn-secondary">Kembali</a>
      </div>
    </div>
  </div>
</div>

@endsection

@section('modal')
<!-- Modal Status -->
<div class="modal fade" id="modal__status" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <form id="form__status" action="" method="get">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Yakin mengaktifkan status pendaftar ?</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary ml-2" data-dismiss="modal">Kembali</button>
          <button type="submit" class="btn btn-primary ml-2">Lanjutkan</button>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection