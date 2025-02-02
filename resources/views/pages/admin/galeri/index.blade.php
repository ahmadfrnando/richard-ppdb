@extends('layouts.admin')
@section('nav__item-admin-galeri', 'active')

@section('title', 'Galeri')

@section('content')
<div class="card mb-4">
  <div class="card-header row">
    <div class="col-12 col-sm-6 p-0 mb-2">
      <div class="d-flex align-items-start">
        <a href="#modal__create" data-toggle="modal" class="btn btn-primary mr-2">
          Tambah Foto
        </a>
      </div>
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
            <th scope="col">Judul</th>
            <th scope="col">Foto</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
          @if(count($galeri) > 0)
          @foreach ($galeri as $key => $item)
          <tr>
            <th scope="row">{{ $key + 1 }}</th> <!-- Indeks -->
            <td>{{ substr($item->judul, 0, 20) }} ...</td> <!-- Properti judul -->
            <td><img src="{{ asset('storage/'.$item->foto) }}" width="100" height="100" alt="{{ $item->judul }}"></td>
            <td>
              <!-- Aksi -->
              <a href="#modal__delete" data-toggle="modal"
                onclick="$('#modal__delete #form__delete').attr('action', '/admin/galeri/{{ $item->id }}/destroy')"
                class="btn btn-danger mr-2 mb-2">Hapus</a>
              <!-- Tombol lainnya -->
            </td>
          </tr>
          @endforeach
          @else
          <tr>
            <th colspan="4" scope="row" class="text-center">Data tidak ditemukan</th>
          </tr>
          @endif
        </tbody>
      </table>
    </div>
  </div>
</div>

@endsection

@section('modal')

<!-- Modal Create -->
<div class="modal fade" id="modal__create" data-backdrop="static" data-keyboard="false" tabindex="-1"
  aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <form method="POST" enctype="multipart/form-data" action="{{ route('admin.galeri.store') }}">
        @csrf
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Tambah Galeri</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="form-group mb-3">
            <label for="judul">Judul</label>
            <input type="text" required class="form-control @error('judul') is-invalid @enderror" id="judul"
              name="judul" placeholder="Masukkan judul di sini">
            @error('judul')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
            @enderror
          </div>
          <div class="form-group mb-3">
            <label for="foto">Foto</label>
            <input type="file" required class="form-control @error('foto') is-invalid @enderror" id="foto"
              name="foto" accept="image/*">
            @error('foto')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
            @enderror
          </div>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary">Simpan</button>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
        </div>
      </form>

    </div>
  </div>
</div>
<!-- Modal Edit -->
<div class="modal fade" id="modal__edit" data-backdrop="static" data-keyboard="false" tabindex="-1"
  aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <form id="form__edit" action="" method="post">
        @csrf
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Ubah Pengumuman</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="form-group">
            <label for="judul">Judul</label>
            <input type="text" required class="form-control @error('judul') is-invalid @enderror" id="judul"
              name="judul" value="">
            @error('judul')
            <div class="invalid-feedback">
              {{ $message}}
            </div>
            @enderror
          </div>
          <div class="form-group">
            <label for="deskripsi">deskripsi</label>
            <textarea class="form-control @error('deskripsi') is-invalid @enderror" id="deskripsi" name="deskripsi"
              required></textarea>
            @error('deskripsi')
            <div class="invalid-feedback">
              {{ $message}}
            </div>
            @enderror
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
          <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
      </form>
    </div>
  </div>
</div>
</div>

<!-- Modal Delete -->
<div class="modal fade" id="modal__delete" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <form id="form__delete" action="" method="get">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Yakin menghapus Galeri?</h5>
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