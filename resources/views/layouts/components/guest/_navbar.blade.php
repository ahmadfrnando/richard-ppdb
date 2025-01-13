<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container-lg d-flex justify-content-center justify-content-md-between">
    <ul class="navbar-nav flex-row" style="gap: 1.5rem;">
      <li class="nav-item @yield('nav__item-pendaftaran')">
        <a class="nav-link pr-2 pr-md-3 pl-2 pl-md-0" href="/" style="white-space: nowrap;">
          <i class="fas fa-home text-white mr-1 opacity-50 @yield('nav__icon-beranda')"
            style="font-size: 0.74rem;"></i>
          Beranda
        </a>
      </li>
      <li class="nav-item @yield('nav__item-profil')">
        <a class="nav-link pr-2 pr-md-3 pl-2 pl-md-0" href="/profil" style="white-space: nowrap;">
          <i class="fas fa-building text-white mr-1 opacity-50 @yield('nav__icon-profil')"
            style="font-size: 0.74rem;"></i>
          Profil
        </a>
      </li>
      <li class="nav-item @yield('nav__item-struktur-organisasi')">
        <a class="nav-link pr-2 pr-md-3 pl-2 pl-md-0" href="/struktur-organisasi" style="white-space: nowrap;">
          <i class="fas fa-sitemap text-white mr-1 opacity-50 @yield('nav__icon-struktur-organisasi')" style="font-size: 0.74rem;"></i>
          Struktur Organisasi
        </a>
      </li>
      <li class="nav-item @yield('nav__item-tugas')">
        <a class="nav-link pr-2 pr-md-3 pl-2 pl-md-0" href="/tugas" style="white-space: nowrap;">
          <i class="fas fa-clipboard-list text-white mr-1 opacity-50 @yield('nav__icon-tugas')" style="font-size: 0.74rem;"></i>
          Tugas dan Tanggung Jawab
        </a>
      </li>
      <li class="nav-item @yield('nav__item-fasilitas')">
        <a class="nav-link pr-2 pr-md-3 pl-2 pl-md-0" href="/fasilitas" style="white-space: nowrap;">
          <i class="fas fa-cogs text-white mr-1 opacity-50 @yield('nav__icon-fasilitas')" style="font-size: 0.74rem;"></i>
          Fasilitas Sekolah
        </a>
      </li>
    </ul>
    <div class="d-none align-items-center d-md-flex" style="gap: 1.5rem;">
      <a href="/pendaftaran" class="text-light font-weight-normal pl-2">
        PPDB
      </a>
      <a href="#" class="text-light font-weight-normal pl-2" data-toggle="modal" data-target="#modal_kontak">
        Kontak
      </a>
    </div>
  </div>
</nav>
<div class="bg-success d-block py-2 d-md-none">
  <div class="container-lg d-flex justify-content-center align-items-center">
    <a href="#" class="text-light font-weight-normal mx-2" data-toggle="modal" data-target="#modal_kontak">
      Kontak
    </a>
  </div>
</div>