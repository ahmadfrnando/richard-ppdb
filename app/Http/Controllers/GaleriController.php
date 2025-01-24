<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;

class GaleriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $galeri = Gallery::orderBy('id', 'DESC')->get();
        return view('/pages/admin/galeri/index', compact('galeri'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {}

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'judul' => 'required|string|max:255',
            'foto' => 'required|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        // Tambahkan debug untuk memastikan validasi lolos
        // dd($request->all());

        // Simpan file ke direktori 'images/galeri' di storage/public
        $filePath = $request->file('foto')->store('images/galeri', 'public');

        // Simpan data ke database
        $galeri = new Gallery();
        $galeri->judul = $request->judul;
        $galeri->foto = $filePath; // Simpan path file
        $galeri->save();

        // Redirect dengan pesan sukses
        return redirect()->route('admin.galeri')->with('success', 'Galeri berhasil ditambahkan');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
