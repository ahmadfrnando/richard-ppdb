<?php

namespace App\Providers;

use App\Models\Kontak;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

class DataSekolahProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $data = Kontak::find(1); // Ambil data tabel
        View::share('dataSekolah', $data); // Bagikan ke semua view
    }
}
