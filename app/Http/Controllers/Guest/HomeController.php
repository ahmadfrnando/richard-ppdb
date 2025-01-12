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

    public function ekstrakurikuler()
    {
        return view('pages.guest.ekstrakurikuler');
    }

    public function kelas()
    {
        return view('pages.guest.kelas');
    }

}
