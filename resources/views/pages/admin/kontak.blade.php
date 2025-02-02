@extends('layouts.admin')
@section('nav__item-admin', 'active')

@section('title', 'Informasi Sekolah')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="container mt-5">
            @if(session()->has('success'))
            <div class="alert alert-success">
                {{ session()->get('success') }}
            </div>
            @endif
            @if(session()->has('error'))
            <div class="alert alert-danger">
                {{ session()->get('error') }}
            </div>
            @endif
            <div class="card">
                <div class="card-header bg-primary text-white">
                    <h3>Daftar Informasi Sekolah</h3>
                </div>
                <div class="card-body">
                    <form action="{{  route('admin.kontak.update') }}" method="post">
                        @csrf
                        <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel">Data Kontak Sekolah</h5>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="nama_sekolah">Nama Sekolah</label>
                                <input type="text" class="form-control @error('nama_sekolah') is-invalid @enderror" id="nama_sekolah"
                                    name="nama_sekolah" value="{{ $kontak->nama_sekolah }}">
                                @error('nama_sekolah')
                                <div class="invalid-feedback">
                                    {{ $message}}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ $kontak->email }}">
                                @error('email')
                                <div class="invalid-feedback">
                                    {{ $message}}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="alamat">Alamat Sekolah</label>
                                <textarea type="text" class="form-control @error('alamat') is-invalid @enderror" id="alamat" name="alamat">{{ $kontak->alamat }}</textarea>
                                @error('alamat')
                                <div class="invalid-feedback">
                                    {{ $message}}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="kordinat_maps">Kordinat Maps</label>
                                <textarea class="form-control @error('kordinat_maps') is-invalid @enderror" id="kordinat_maps" name="kordinat_maps">{{  $kontak->kordinat_maps }}</textarea>
                                @error('kordinat_maps')
                                <div class="invalid-feedback">
                                    {{ $message}}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="jam_buka">Jam Buka</label>
                                <input type="time" class="form-control @error('jam_buka') is-invalid @enderror" id="jam_buka" name="jam_buka" value="{{ $kontak->jam_buka }}">
                                @error('jam_buka')
                                <div class="invalid-feedback">
                                    {{ $message}}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="jam_tutup">Jam Tutup</label>
                                <input type="time" class="form-control @error('jam_tutup') is-invalid @enderror" id="jam_tutup" name="jam_tutup" value="{{ $kontak->jam_tutup }}">
                                @error('jam_tutup')
                                <div class="invalid-feedback">
                                    {{ $message}}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="no_telp">No Telp</label>
                                <input type="text" class="form-control @error('no_telp') is-invalid @enderror" id="no_telp"
                                    name="no_telp" value="{{ $kontak->no_telp }}">
                                @error('no_telp')
                                <div class="invalid-feedback">
                                    {{ $message}}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="no_wa">No WA</label>
                                <input type="text" class="form-control @error('no_wa') is-invalid @enderror" id="no_wa" name="no_wa"
                                    value="{{ $kontak->no_wa }}">
                                @error('no_wa')
                                <div class="invalid-feedback">
                                    {{ $message}}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="modal-footer">
                            <div class="">
                                <a href="{{ url('/admin') }}" class="btn btn-secondary">Kembali</a>
                            </div>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection