@extends('layouts.app')

@section('content')
<section class="py-16 bg-gray-100">
  <div class="max-w-6xl mx-auto px-4">
    <h1 class="text-4xl font-extrabold text-[#7CB518] text-center mb-10">Berita Sekolah</h1>

    <div class="grid md:grid-cols-3 sm:grid-cols-2 gap-8">
      @foreach($berita as $item)
        <div class="bg-white shadow-lg rounded-2xl overflow-hidden hover:-translate-y-2 transition-all duration-300">
          <img src="{{ asset('storage/' . $item->gambar) }}" alt="{{ $item->judul }}" class="w-full h-56 object-cover">
          <div class="p-5">
            <h2 class="text-xl font-semibold text-gray-800 mb-2">{{ $item->judul }}</h2>
            <p class="text-gray-500 text-sm mb-3">{{ \Carbon\Carbon::parse($item->tanggal)->format('d M Y') }}</p>
            <p class="text-gray-700 line-clamp-3 mb-4">{{ Str::limit(strip_tags($item->isi), 120) }}</p>
            <a href="{{ route('berita.show', $item->slug) }}" class="inline-block bg-[#699D15] hover:bg-[#7CB518] text-white px-5 py-2 rounded-full text-sm font-semibold transition-all duration-300">Baca Selengkapnya</a>
          </div>
        </div>
      @endforeach
    </div>

    <div class="mt-10">
      {{ $berita->links() }}
    </div>
  </div>
</section>
@endsection
