<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('pages.guest.index');
    }

    public function profil()
    {
        return view('pages.guest.profil');
    }

    public function tugas()
    {
        return view('pages.guest.tugas');
    }

    public function strukturOrganisasi()
    {
        return view('pages.guest.struktur-organisasi');
    }

    public function fasilitas()
    {
        return view('pages.guest.fasilitas');
    }
    public function galeri()
    {
        return view('pages.guest.galeri');
    }

}
