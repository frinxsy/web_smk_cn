<?php

namespace App\Http\Controllers;

use App\Models\Prestasi;
use Illuminate\Http\Request;

class PrestasiController extends Controller
{
    /**
     * Menampilkan daftar semua prestasi.
     */
    public function index()
    {
        // Ambil semua prestasi, urutkan berdasarkan tanggal terbaru
        $prestasis = Prestasi::latest('tanggal_diraih')->get();
        return view('prestasi', compact('prestasis'));
    }
}
