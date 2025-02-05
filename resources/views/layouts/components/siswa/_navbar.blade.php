<nav class="navbar navbar-expand-lg navbar-dark bg-success">
  <div class="container-lg d-flex justify-content-center">
    <ul class="navbar-nav flex-row">
      <li class="nav-item @yield('nav__item-siswa')">
        <a class="nav-link p-0 px-2" href="/siswa">
          Beranda
        </a>
      </li>
      <li class="nav-item @yield('nav__item-siswa-pengumuman')">
        <a class="nav-link p-0 px-2" href="/siswa/pengumuman">
          Pengumuman <span class="badge badge-danger font-weight-medium">{{ $pengumumanCount->count() }}</span>
        </a>
      </li>
      <li class="nav-item @yield('nav__item-siswa-data')">
        <a class="nav-link p-0 px-2" href="/siswa/data">
          Data Siswa
        </a>
      </li>
      <!-- <li class="nav-item @yield('nav__item-siswa-daftar-ulang')">
        <a class="nav-link p-0 px-2" href="/siswa/daftar-ulang">
          Daftar Ulang
        </a>
      </li> -->
    </ul>
  </div>
</nav>