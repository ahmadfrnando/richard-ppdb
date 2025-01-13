@extends('layouts.guest')

@include('layouts.components.guest._header')
@include('layouts.components.guest._navbar')

@section('main')
<style>
  .hero-section {
    background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)),
    url('{{ asset("images/hero-struktur.jpg") }}') center/cover no-repeat;
    color: white;
    text-align: center;
    padding: 100px 20px;
    width: 100%;
  }

  .organization-chart {
    background-color: #f7f9fc;
    border-radius: 10px;
    padding: 20px;
    box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
  }

  .organization-chart .box {
    border: 2px solid #007bff;
    padding: 15px;
    background-color: white;
    border-radius: 8px;
    font-weight: bold;
    color: #343a40;
    text-align: center;
    box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s;
  }

  .organization-chart .box:hover {
    transform: translateY(-5px);
    box-shadow: 0px 6px 12px rgba(0, 0, 0, 0.15);
  }

  .organization-chart .connector {
    width: 2px;
    background-color: #007bff;
    margin: 0 auto;
  }

  .organization-chart .horizontal-line {
    height: 2px;
    background-color: #007bff;
    margin: 0 auto;
  }
</style>

<main style="margin-bottom: 200px">
  <!-- Hero Section -->
  <div class="hero-section">
    <h1 class="text-light">Struktur Organisasi</h1>
  </div>

  <!-- Struktur Organisasi -->
  <div class="container-lg my-5">
    <div class="organization-chart text-center">
      <!-- Yayasan -->
      <div class="box mb-4">YAYASAN</div>

      <!-- Kepala Sekolah -->
      <!-- <div class="connector" style="height: 40px;"></div> -->
      <div class="box mb-4">
        KEPALA SEKOLAH<br>
        <span>MARIANI ARITONANG, S.Pd</span>
      </div>

      <!-- Wakasek Level -->
      <!-- <div class="connector" style="height: 40px;"></div> -->
      <div class="d-flex justify-content-around align-items-center">
        <div class="box">
          WAKASEK KURIKULUM<br>
          <span>MARNI GURNING, S.Pd</span>
        </div>
        <!-- <div class="horizontal-line" style="width: 50%;"></div> -->
        <div class="box">
          WAKASEK KESISWAAN<br>
          <span>LINCE TONDANG, S.Pd</span>
        </div>
        <!-- <div class="horizontal-line" style="width: 50%;"></div> -->
        <div class="box">
          WAKASEK SARANA/PRASARANA<br>
          <span>DORIS PANGARIBUAN, S.Pd</span>
        </div>
      </div>
    </div>
  </div>

  <!-- Table Section -->
  <div class="container-lg py-5">
    <div class="table-section organization-chart">
      <h2>Data Guru dan Tenaga Kependidikan</h2>
      <table class="table table-striped">
        <thead>
          <tr>
            <th>No</th>
            <th>Nama Guru/Pegawai</th>
            <th>Mata Pelajaran</th>
            <th>Jabatan</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td>Mariani Aritonang, S.Pd</td>
            <td>Bahasa Jerman</td>
            <td>Kepsek</td>
          </tr>
          <tr>
            <td>2</td>
            <td>Marni Gurning, S.Pd</td>
            <td>Bahasa Inggris</td>
            <td>Wakasek, Wali Kelas</td>
          </tr>
          <tr>
            <td>3</td>
            <td>Lince Tondang, S.Pd</td>
            <td>Bahasa Indonesia</td>
            <td>Wakasek, Wali Kelas</td>
          </tr>
          <tr>
            <td>4</td>
            <td>Hertati Manurung, S.Pd</td>
            <td>TIK, Prakarya</td>
            <td>Wakasek, Wali Kelas</td>
          </tr>
          <tr>
            <td>5</td>
            <td>Doris A E Y Pangaribuan, S.Pd</td>
            <td>Fisika</td>
            <td>Kap. Lab</td>
          </tr>
          <tr>
            <td>6</td>
            <td>Lisbethy Tobing, S.Pd</td>
            <td>PKN</td>
            <td>Guru Mapel</td>
          </tr>
          <tr>
            <td>7</td>
            <td>Dra. Yusni Pasaribu</td>
            <td>Sejarah</td>
            <td>Guru Mapel</td>
          </tr>
          <tr>
            <td>8</td>
            <td>Desta Sipahutar, M.Pd</td>
            <td>Biologi</td>
            <td>Wali Kelas</td>
          </tr>
          <tr>
            <td>9</td>
            <td>Rolas Nainggolan, M.Sos</td>
            <td>Sosiologi</td>
            <td>Guru Mapel</td>
          </tr>
          <tr>
            <td>10</td>
            <td>Nerling Sihombing, S.Pd</td>
            <td>PJOK</td>
            <td>Guru Mapel</td>
          </tr>
          <tr>
            <td>11</td>
            <td>Ummi, S.Pd</td>
            <td>Geografi</td>
            <td>Guru Mapel</td>
          </tr>
          <tr>
            <td>12</td>
            <td>Ridwan Sihombing, S.Pd</td>
            <td>Geografi</td>
            <td>Guru Mapel</td>
          </tr>
          <tr>
            <td>13</td>
            <td>Fransiska Simarmata, S.Pd</td>
            <td>Agama Katolik</td>
            <td>Guru Mapel</td>
          </tr>
          <tr>
            <td>14</td>
            <td>Betty Lumban Gaol, S.Pd</td>
            <td>Kimia</td>
            <td>Wali Kelas</td>
          </tr>
          <tr>
            <td>15</td>
            <td>Sandra Barus, SE</td>
            <td>Ekonomi</td>
            <td>Guru Mapel</td>
          </tr>
          <tr>
            <td>16</td>
            <td>Imelda Silitonga, S.Pd</td>
            <td>Matematika Minat</td>
            <td>Guru Mapel</td>
          </tr>
          <tr>
            <td>17</td>
            <td>Tumpal Simanjuntak, S.Pd</td>
            <td>Matematika Wajib</td>
            <td>Guru Mapel</td>
          </tr>
          <tr>
            <td>18</td>
            <td>C. Hutasoit, S.Pd</td>
            <td>Seni Budaya</td>
            <td>Wali Kelas</td>
          </tr>
          <tr>
            <td>19</td>
            <td>T. Sinaga</td>
            <td>KTU</td>
            <td>Tata Usaha</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>

  @include('layouts.components.guest._footer')
</main>
@endsection
