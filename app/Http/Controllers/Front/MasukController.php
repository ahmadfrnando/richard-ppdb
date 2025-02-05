<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Siswa;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MasukController extends Controller
{
    public function index()
    {
        if (Auth::check()) {
            return redirect()->route('siswa');
        }

        return view('/pages/masuk');
    }

    public function indexAdmin()
    {
        if (Auth::check()) {
            return redirect()->route('admin');
        }

        return view('/pages/masuk-admin');
    }

    public function storeAdmin(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        $admin = User::where('username', $request->username)->get();

        if (count($admin)) {
            $admin = $admin[0];

            Auth::attempt($request->only('username', 'password'));

            if (Auth::check()) {
                return redirect()->route('admin')->with('success', 'Berhasil Masuk ...');
            }
        }

        return redirect()->route('admin.login')->with('error', 'Username dan Password yang dimasukkan tidak valid ...');
    }

    public function store(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        $siswa = Siswa::where('nisn', $request->username)->get();

        if (count($siswa)) {
            $siswa = $siswa[0];

            Auth::attempt($request->only('username', 'password'));

            if (Auth::check()) {
                return redirect()->route('siswa')->with('success', 'Berhasil Masuk ...');
            }
        }

        return redirect()->route('masuk')->with('error', 'NISN yang dimasukkan tidak valid ...');
    }

    public function keluar()
    {
        Auth::logout();

        return redirect()->route('masuk');
    }
}
