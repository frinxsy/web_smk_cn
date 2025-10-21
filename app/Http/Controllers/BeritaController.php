<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    // Menampilkan semua berita
    public function index()
    {
        $berita = Berita::latest()->paginate(6); // pagination 6 berita per halaman
        return view('berita.index', compact('berita'));
    }

    // Menampilkan berita detail
    public function show($slug)
    {
        $berita = Berita::where('slug', $slug)->firstOrFail();
        return view('berita.show', compact('berita'));
    }
}
