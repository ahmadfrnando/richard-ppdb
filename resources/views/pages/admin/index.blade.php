@extends('layouts.admin')
@section('nav__item-admin', 'active')

@section('title', 'Dashboard')

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
          {{ $siswa->count() }}
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
    <div class="card">
      <div class="card-header">
        <h4>Total Pendaftar</h4>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-striped table-bordered">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Nama</th>
                <th scope="col">Progress</th>
                <th scope="col">Aksi</th>
              </tr>
            </thead>
            <tbody>
              @foreach($siswa as $key => $siswa)
              <tr>
                <th scope="row">{{ $loop->index + 1 }}</th>
                <td>{{ $siswa->nama }}</td>
                <td>
                  <div class="progress" data-height="4" data-toggle="tooltip" title="" data-original-title="100%"
                    style="height: 4px;">
                    <div class="progress-bar bg-success" data-width="{{ $siswa->status == 1 ? 33 : 66 }}%" style="width: {{ $siswa->status == 1 ? 33 : 66 }}%"></div>
                  </div>
                </td>
                <td><a href="#" data-toggle="modal"
                    class="btn btn-warning mr-2 mb-2">Detail</a></td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection