{{-- UTIL --}}

@section('nav__item-siswa-daftar-ulang', 'active')

{{-- MAIN --}}

@extends('layouts.app')

@include('layouts.components.siswa._header')
@include('layouts.components.siswa._navbar')

@section('main')
<?php
$berkas = [
  [
    'name' => 'file_id',
    'label' => 'KTP/Kartu Pelajar',
    'value' => 'KTP/Kartu Pelajar',
    'href' => asset('storage/file/' . $siswa->file_id)
  ],
  [
    'name' => 'file_kk',
    'label' => 'Kartu Keluarga',
    'value' => 'Kartu Keluarga',
    'href' => asset('storage/file/' . $siswa->file_kk)
  ],
  [
    'name' => 'file_ijazah',
    'label' => 'Ijazah',
    'value' => 'Ijazah',
    'href' => asset('storage/file/' . $siswa->file_ijazah)
  ],
  [
    'name' => 'file_skhu',
    'label' => 'Surat Keterangan Hasil Ujian',
    'value' => 'Surat Keterangan Hasil Ujian',
    'href' => asset('storage/file/' . $siswa->file_skhu)
  ],
  [
    'name' => 'file_pas_foto',
    'label' => 'Pas Foto',
    'value' => 'Pas Foto',
    'href' => asset('storage/file/' . $siswa->file_pas_foto)
  ]
]
?>
<main>
  <div class="container-lg d-flex justify-content-center py-4">
    <div class="col-12 col-md-10 col-lg-8 p-0">
      @foreach($berkas as $data)
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">{{ $data['label'] }}</h4>
        </div>
        <div class="card-body">
          <object data="{{ $data['href'] }}" type="application/pdf" width="100%" height="800">
            <p>Your web browser doesn't have a PDF plugin. Instead you can <a href="{{ $data['href'] }}">click here to download the PDF file.</a></p>
          </object>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</main>
@endsection