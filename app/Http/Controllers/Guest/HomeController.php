<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {   
        $galeri = Gallery::all();
        return view('pages.guest.index', compact('galeri'));
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
        $galeri = Gallery::all();
        return view('pages.guest.galeri', compact('galeri'));
    }

}
