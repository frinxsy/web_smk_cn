@extends('layouts.app')

@section('title', 'Prestasi SMK Citra Negara')

@section('content')
<section class="py-20 px-6 bg-gradient-to-b from-gray-50 to-white min-h-screen relative overflow-hidden">
  <div class="max-w-7xl mx-auto text-center mb-16">
    <h2 class="text-4xl md:text-5xl font-extrabold text-gray-800 mb-4">
      Prestasi <span class="text-[#7CB518]">SMK Citra Negara</span>
    </h2>
    <p class="text-gray-600 max-w-2xl mx-auto text-base md:text-lg">
      Kumpulan prestasi terbaik yang diraih oleh siswa dan siswi kami di tingkat sekolah, kota, provinsi, hingga nasional.
    </p>
  </div>

  <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-10 max-w-6xl mx-auto">
    @foreach($prestasis as $item)
    <div class="bg-white rounded-2xl overflow-hidden shadow-md border border-gray-100 transition-all duration-300">
      <img src="{{ asset('storage/' . $item->gambar) }}" alt="{{ $item->judul }}" class="w-full h-[400px] object-cover" />
      <div class="p-6 text-center">
        <h4 class="text-lg font-semibold text-gray-800">{{ $item->judul }}</h4>
        <p class="text-sm text-gray-500 mt-1">{{ $item->deskripsi }}</p>
        <p class="text-xs text-gray-400 mt-1">Penyelenggara: {{ $item->penyelenggara }} | {{ \Carbon\Carbon::parse($item->tanggal)->format('d M Y') }}</p>
      </div>
    </div>
    @endforeach
  </div>
</section>
@endsection
