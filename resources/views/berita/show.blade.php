@extends('layouts.app')

@section('content')
<section class="relative py-24 px-6 bg-[#f7f7f7] overflow-hidden">
  <div class="absolute inset-0 opacity-20 bg-[url('/images/pattern-light.svg')] bg-repeat"></div>
  <div class="max-w-5xl mx-auto relative z-10">

    <!-- Gambar 16:9 akan mengisi kotak w-full h-96 -->
    <img src="{{ asset('storage/' . $berita->gambar) }}" alt="{{ $berita->judul }}" class="w-full h-96 object-cover rounded-3xl shadow-lg mb-10">

    <h1 class="text-4xl font-extrabold text-[#7CB518] mb-3">{{ $berita->judul }}</h1>
    <p class="text-gray-600 text-sm mb-8">
      {{ \Carbon\Carbon::parse($berita->tanggal)->format('d M Y') }} | Oleh: {{ $berita->penulis }}
    </p>

    <div class="text-gray-800 leading-relaxed text-lg space-y-6">
      {!! nl2br(e($berita->isi)) !!}
    </div>

    <div class="flex justify-center gap-4">
      <div class="mt-12 text-center">
        <a href="{{ route('berita.index') }}" class="inline-block bg-[#699D15] hover:bg-[#7CB518] text-white px-8 py-3 rounded-full font-semibold shadow-lg transition-all duration-300 active:scale-95">
          Lihat berita lainnya
        </a>
      </div>

      <div class="mt-12 text-center">
        <a href="/" class="inline-block bg-[#699D15] hover:bg-[#7CB518] text-white px-8 py-3 rounded-full font-semibold shadow-lg transition-all duration-300 active:scale-95">
          Kembali ke beranda
        </a>
      </div>
    </div>

  </div>
</section>
@endsection
