@extends('layouts.admin')
@section('nav__item-admin-konfirmasi', 'active')

@section('title', 'Konfirmasi')

@section('content')
<div class="card mb-4">
  <div class="card-header row">
    <div class="col-12 col-sm-6 p-0 mb-2">
      <h6 class="section-title m-0">Data Konfirmasi</h6>
    </div>
    <div class="col-12 col-sm-6 p-0 mb-2">
      <div class="d-flex align-items-end flex-column">
        <div>
          @if(session('success'))
          <div class="alert alert-success p-1 px-4 m-0">
            {{ session('success') }}
          </div>
          @elseif(session('error'))
          <div class="alert alert-danger p-1 px-4 m-0">
            {{ session('error') }}
          </div>
          @endif
        </div>
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
            <th scope="col">Nomor HP</th>
            <th scope="col">Status</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
          <?php $count = 1; ?>
          @foreach ($konfirmasi as $data)
          @if($data->status)
          <tr>
            <th scope="row">{{ $count }}</th>
            <td>{{ $data->nisn }}</td>
            <td>{{ $data->nama }}</td>
            <td>{{ $data->nomor_hp }}</td>
            <td>
              @if($data->status == 1)
              <form action="{{ route('admin.siswa.status', ['id' => $data->id]) }}" method="post">
                @csrf
                <button type="submit" value="2" name="status" class="badge badge-danger mr-2 mb-2">
                  <i class="fas fa-circle text-white mr-2" style="font-size: 0.6rem;"></i>
                  <span>Belum diverifikasi</span></button>
              </form>
              @else
              <div class="badge badge-warning mr-2 mb-2">
                <i class="fas fa-circle text-white mr-2" style="font-size: 0.6rem;"></i>
                <span>Sudah diverifikasi</span>
              </div>
              @endif
            </td>
            <td class="d-flex flex-row" style="gap: 1rem">
              <a href="{{ route('admin.konfirmasi.detail', ['id' => $data->id]) }}"
                class="btn btn-info mr-2 mb-2">Detail</a>
            </td>
            <td>
            </td>
          </tr>
          <?php $count++ ?>
          @section('modal')
          <div class="modal fade" id="modal__status" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <form id="form__status" action="{{ route('admin.siswa.status', ['id' => $data->id]) }}" method="post">
                  @csrf
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Apakah anda yakin ingin memverifikasi siswa ini?</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary ml-2" data-dismiss="modal">Kembali</button>
                    <button type="submit" value="2" name="status" class="btn btn-primary ml-2">Terima</button>
                    <button type="submit" value="3" name="status" class="btn btn-primary ml-2">Tolak</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
          @endsection
          @endif
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>

@endsection