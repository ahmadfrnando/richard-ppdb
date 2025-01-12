@extends('layouts.guest')

@include('layouts.components.guest._header')
@include('layouts.components.guest._navbar')

@section('main')
<style>
  .jumbotron {
    background-image: url('{{ asset("images/foto2.jpeg") }}');
    background-size: cover;
    background-position: center;
    background-blend-mode: multiply;
    background-color: rgba(0, 0, 0, 0.6);
    height: 50vh;
    display: flex;
    justify-content: center;
    align-items: flex-end;
    text-align: center;
    padding-bottom: 20px;
  }

  .jumbotron h1,
  .jumbotron p {
    text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.6);
  }

  .card-body {
    transition: transform 0.3s ease, box-shadow 0.3s ease;
  }

  .card-body:hover {
    transform: translateY(-5px);
    box-shadow: 0px 4px 20px rgba(0, 0, 0, 0.1);
  }

  .card-img-top {
    transition: transform 0.3s ease;
  }

  .card-img-top:hover {
    transform: scale(1.1);
  }

  .testimonial-blockquote {
    background-color: #f8f9fa;
    padding: 15px;
    border-radius: 5px;
    box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
  }

  .testimonial-blockquote footer {
    font-style: italic;
    color: #007bff;
  }

  .cta-btn {
    background-color: #007bff;
    border-color: #007bff;
    font-size: 1.2rem;
  }

  .cta-btn:hover {
    background-color: #0056b3;
    border-color: #0056b3;
  }

  .gallery img {
    transition: transform 0.3s ease, filter 0.3s ease;
  }

  .gallery img:hover {
    transform: scale(1.1);
    filter: brightness(0.8);
  }

  .section-title {
    margin-bottom: 30px;
    font-size: 2rem;
    font-weight: bold;
    color: #343a40;
  }

  .section-title span {
    color: #007bff;
  }
</style>

<main>
  <div class="jumbotron jumbotron-fluid">
    <div class="container">
      <h1 class="display-4 text-light">Selamat Datang di <span class="text-primary">SMK Swasta Katolik Marina</span></h1>
      <p class="lead text-light">Mencetak Generasi Unggul dan Siap Kerja</p>
      <a href="/pendaftaran">
        <button type="button" class="btn cta-btn">Daftar Sekarang</button>
      </a>
    </div>
  </div>

  <div class="container-lg">
    <div class="row mb-4">
      <div class="col-md-6 mb-4">
        <div class="card h-100 shadow-sm">
          <div class="card-body">
            <h5 class="card-title">Tentang Kami</h5>
            <p class="card-text">SMK Swasta Marina adalah lembaga pendidikan yang berkomitmen untuk mencetak lulusan yang berkualitas dan siap bersaing di dunia kerja. Kami menawarkan berbagai program studi yang relevan dengan kebutuhan industri.</p>
            <a href="#" class="btn cta-btn">Selengkapnya</a>
          </div>
        </div>
      </div>
      <div class="col-md-6 mb-4">
        <div class="card h-100 shadow-sm">
          <div class="card-body">
            <h5 class="card-title">Program Studi</h5>
            <p class="card-text">Kami memiliki berbagai program studi, antara lain: Teknik Komputer dan Jaringan, Akuntansi, dan Desain Grafis. Setiap program dirancang untuk memberikan keterampilan praktis yang dibutuhkan di dunia kerja.</p>
            <a href="#" class="btn cta-btn">Selengkapnya</a>
          </div>
        </div>
      </div>
    </div>

    <!-- Galeri -->
    <div class="row mb-4 gallery">
      <div class="col-12 text-center">
        <h2 class="section-title">Galeri</h2>
      </div>
      <div class="col-md-4 mb-3">
        <img src="{{ asset('images/foto4.jpeg') }}" class="img-fluid rounded shadow-sm" alt="Galeri 1">
      </div>
      <div class="col-md-4 mb-3">
        <img src="{{ asset('images/foto5.jpeg') }}" class="img-fluid rounded shadow-sm" alt="Galeri 2">
      </div>
      <div class="col-md-4 mb-3">
        <img src="{{ asset('images/foto6.jpeg') }}" class="img-fluid rounded shadow-sm" alt="Galeri 3">
      </div>
    </div>

    <!-- Kegiatan Terbaru -->
    <div class="row mb-4">
      <div class="col-12">
        <h2 class="section-title">Kegiatan Terbaru</h2>
      </div>
      <div class="col-md-3 mb-4">
        <div class="card shadow-sm">
          <div class="card-body">
            <h5 class="card-title">Workshop Teknologi Informasi</h5>
            <p class="card-text">Pada tanggal 15 Maret 2023, kami mengadakan workshop tentang teknologi informasi yang dihadiri oleh siswa dan guru. Kegiatan ini bertujuan untuk meningkatkan keterampilan siswa dalam bidang IT.</p>
            <a href="#" class="btn cta-btn" data-toggle="modal" data-target="#modal_detail">Baca Selengkapnya</a>
          </div>
        </div>
      </div>
      <div class="col-md-3 mb-4">
        <div class="card shadow-sm">
          <div class="card-body">
            <h5 class="card-title">Event Sekolah</h5>
            <p class="card-text">Kami mengadakan berbagai event menarik sepanjang tahun untuk meningkatkan keterlibatan siswa dan orang tua. Bergabunglah dengan kami dalam acara mendatang!</p>
            <a href="#" class="btn cta-btn">Baca Selengkapnya</a>
          </div>
        </div>
      </div>
      <div class="col-md-3 mb-4">
        <div class="card shadow-sm">
          <div class="card-body">
            <h5 class="card-title">Workshop Teknologi Informasi</h5>
            <p class="card-text">Pada tanggal 15 Maret 2023, kami mengadakan workshop tentang teknologi informasi yang dihadiri oleh siswa dan guru. Kegiatan ini bertujuan untuk meningkatkan keterampilan siswa dalam bidang IT.</p>
            <a href="#" class="btn cta-btn">Baca Selengkapnya</a>
          </div>
        </div>
      </div>
      <div class="col-md-3 mb-4">
        <div class="card shadow-sm">
          <div class="card-body">
            <h5 class="card-title">Event Sekolah</h5>
            <p class="card-text">Kami mengadakan berbagai event menarik sepanjang tahun untuk meningkatkan keterlibatan siswa dan orang tua. Bergabunglah dengan kami dalam acara mendatang!</p>
            <a href="#" class="btn cta-btn">Baca Selengkapnya</a>
          </div>
        </div>
      </div>
    </div>

    <!-- Testimoni -->
    <div class="row mb-4">
      <div class="col-12">
        <h2 class="section-title">Testimoni</h2>
      </div>
      <div class="col-md-4 mb-4">
        <div class="card h-100 shadow-sm text-center">
          <div class="card-body testimonial-blockquote">
            <blockquote class="blockquote">
              <p class="mb-0">"SMK Swasta Marina telah memberikan saya banyak pengalaman dan keterampilan yang sangat berguna di dunia kerja."</p>
              <footer class="blockquote-footer">Andi, <cite title="Source Title">Lulusan 2022</cite></footer>
            </blockquote>
          </div>
        </div>
      </div>
      <div class="col-md-4 mb-4">
        <div class="card h-100 shadow-sm text-center">
          <div class="card-body testimonial-blockquote">
            <blockquote class="blockquote">
              <p class="mb-0">"Pengalaman belajar di sini sangat berharga. Para guru sangat mendukung dan profesional."</p>
              <footer class="blockquote-footer">Siti, <cite title="Source Title">Lulusan 2021</cite></footer>
            </blockquote>
          </div>
        </div>
      </div>
      <div class="col-md-4 mb-4">
        <div class="card h-100 shadow-sm text-center">
          <div class="card-body testimonial-blockquote">
            <blockquote class="blockquote">
              <p class="mb-0">"Saya merasa siap untuk memasuki dunia kerja berkat pendidikan yang saya terima di SMK Swasta Marina."</p>
              <footer class="blockquote-footer">Budi, <cite title="Source Title">Lulusan 2020</cite></footer>
            </blockquote>
          </div>
        </div>
      </div>
    </div>

    <!-- Kontak Kami -->
    <div class="row mb-4">
      <div class="col-12">
        <h2 class="section-title">Kontak Kami</h2>
      </div>
      <div class="col-md-6 mb-4">
        <div class="card h-100 shadow-sm">
          <div class="card-body">
            <h5 class="card-title">Hubungi Kami</h5>
            <p class="card-text">Jika Anda memiliki pertanyaan atau ingin mendapatkan informasi lebih lanjut, silakan hubungi kami melalui:</p>
            <ul class="list-unstyled">
              <li><i class="fas fa-envelope"></i> Email: <a href="mailto:info@smkmarina.sch.id">info@smkmarina.sch.id</a></li>
              <li><i class="fas fa-phone"></i> Telepon: (021) 123-4567</li>
              <li><i class="fas fa-map-marker-alt"></i> Alamat: Jl. Pendidikan No. 1, Jakarta</li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-md-6 mb-4">
        <div class="card h-100 shadow-sm">
          <div class="card-body">
            <h5 class="card-title">Lokasi Kami</h5>
            <p class="card-text">Kunjungi kami di lokasi yang strategis dan mudah dijangkau. Kami siap menyambut Anda!</p>
            <div class="text-center">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31855.886777020496!2d98.63875930350879!3d3.5907205106677202!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30312e16684e739b%3A0x8b5249edcebbe4dc!2sYayasan%20Pendidikan%20Katolik%20Mariana!5e0!3m2!1sid!2sid!4v1736655308051!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  @include('layouts.components.guest._footer')
</main>
@endsection