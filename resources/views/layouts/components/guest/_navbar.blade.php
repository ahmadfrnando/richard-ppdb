<?php
$menu = [
  [
    'title' => 'Beranda',
    'url' => '/',
    'icon' => 'fas fa-home',
    'slug' => 'beranda',
  ],
  [
    'title' => 'Profil',
    'url' => '/profil',
    'icon' => 'fas fa-building',
    'slug' => 'profil',
  ],
  [
    'title' => 'Struktur Organisasi',
    'url' => '/struktur-organisasi',
    'icon' => 'fas fa-sitemap',
    'slug' => 'struktur-organisasi',
  ],
  [
    'title' => 'Tugas dan Tanggung Jawab',
    'url' => '/tugas',
    'icon' => 'fas fa-clipboard-list',
    'slug' => 'tugas',
  ],
  [
    'title' => 'Fasilitas Sekolah',
    'url' => '/fasilitas',
    'icon' => 'fas fa-cogs',
    'slug' => 'fasilitas',
  ],
  [
    'title' => 'Galeri',
    'url' => '/galeri',
    'icon' => 'fas fa-images',
    'slug' => 'galeri',
  ],
]
?>

<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container-lg d-flex justify-content-center justify-content-md-between">
    <ul class="navbar-nav flex-row" style="gap: 1.5rem;">
      @foreach ($menu as $item)
      <li class="nav-item @yield('nav__item-' . $item['slug'])">
        <a class="nav-link pr-2 pr-md-3 pl-2 pl-md-0" style="text-transform: capitalize;" href="{{ $item['url'] }}" style="white-space: nowrap;">
          <i class="{{ $item['icon'] }} text-white mr-1 opacity-50 @yield('nav__icon-' . $item['slug'])"
            style="font-size: 0.74rem;"></i>{{ $item['title'] }}
        </a>
      </li>
      @endforeach
    </ul>
    <div class="d-none align-items-center d-md-flex" style="gap: 1.5rem;">
      <a href="/pendaftaran" class="text-light font-weight-normal pl-2">
        <i class="fas fa-pen mr-1 opacity-50 text-white"
          style="font-size: 0.74rem;"></i>
        Pendaftaran
      </a>
      <a href="#" class="text-light font-weight-normal pl-2" data-toggle="modal" data-target="#modal_kontak">
        <i class="fas fa-phone-alt mr-1 opacity-50 text-white"
          style="font-size: 0.74rem;"></i>
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