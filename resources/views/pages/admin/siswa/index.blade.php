@extends('layouts.admin')
@section('nav__item-admin-siswa', 'active')

@section('title', 'Data Pendaftar')

@section('content')
<div class="card mb-4">
  <div class="card-header row">
    <div class="col-12 col-sm-6 p-0 mb-2">
      <div class="d-flex align-items-start">
        <a href="{{ route('admin.siswa.buat') }}" class="btn btn-primary mr-2">
          Tambah Pendaftar
        </a>
        <a href="#modal__print" data-toggle="modal"
          onclick="$('#modal__print #form__print').attr('action', '/admin/siswa/export')"
          class="btn btn-warning mr-2">Export</a>
        <a href="/admin/siswa/" class="btn btn-info">
          <i class="fas fa-sync-alt text-white"></i>
        </a>
        <a href="{{ route('admin.siswa.kirim-pengumuman') }}" class="btn btn-success ml-2">
          Kirim Pengumuman
        </a>
      </div>
    </div>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-striped table-bordered data">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">NISN</th>
            <th scope="col">Nama</th>
            <th scope="col">Status</th>
          </tr>
        </thead>
        <tbody>
          <?php $count = 1 ?>
          @foreach($siswa as $data)
          <tr>
            <td>{{ $count }}</td>
            <td>{{ $data->nisn }}</td>
            <td>{{ $data->nama }}</td>
            <td><span class="badge badge-{{ $data->status == 100 ? 'success' : ($data->status == 101 ? 'success' : 'danger') }}">{{ $data->status == 100 ? 'Lulus' : ($data->status == 101 ? 'Tidak Lulus' : '-') }}</span></td>
          </tr>
          <?php $count++ ?>
          @endforeach
        </tbody>
      </table>

    </div>
  </div>
</div>


@endsection

@section('modal')

<!-- Modal Export -->
<div class="modal fade" id="modal__export" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <form id="form__export" action="/admin/siswa/export" method="get">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Yakin mengunduh data pendaftar ?</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary ml-2" data-dismiss="modal">Kembali</button>
          <button type="submit" class="btn btn-primary ml-2">Unduh</button>
        </div>
      </form>
    </div>
  </div>
</div>


<!-- Modal Status -->
<div class="modal fade" id="modal__status" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <form id="form__status" action="" method="get">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Yakin mengubah status pendaftar ?</h5>
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

<!-- Modal Print -->
<div class="modal fade" id="modal__print" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <form id="form__print" action="" method="get">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Yakin mengunduh data seluruh pendaftar ?</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary ml-2" data-dismiss="modal">Kembali</button>
          <button type="submit" class="btn btn-primary ml-2">Unduh</button>
        </div>
      </form>
    </div>
  </div>
</div>

<!-- Modal Delete -->
<div class="modal fade" id="modal__delete" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <form id="form__delete" action="" method="get">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Yakin menghapus pendaftar ?</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary ml-2" data-dismiss="modal">Kembali</button>
          <button type="submit" class="btn btn-danger ml-2">Hapus</button>
        </div>
      </form>
    </div>
  </div>
</div>

@endsection