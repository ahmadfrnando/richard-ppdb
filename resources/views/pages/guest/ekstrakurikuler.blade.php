@extends('layouts.guest')

@include('layouts.components.guest._header')
@include('layouts.components.guest._navbar')

@section('main')
<main>
  <div class="container-lg">
    <div class="row justify-content-center py-4">
      <div class="col-12 col-lg-9 px-0 px-md-3 mb-4">
        <div class="mb-md-3 px-3 px-md-5 py-4 py-md-5">
          <p>test guest</p>
        </div>
      </div>
    </div>
  </div>
</main>
@endsection