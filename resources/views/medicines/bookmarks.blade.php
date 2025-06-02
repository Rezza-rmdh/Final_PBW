@extends('layouts.app')

@section('title', 'Bookmarks')

@section('content')
<div class="max-w-5xl mx-auto px-4 py-8">
    <h2 class="text-2xl font-semibold mb-6">Obat yang kamu simpan</h2>

    @if($bookmarkedMedicines->isEmpty())
        <p class="text-gray-500">Anda belum menyimpan obat apapun.</p>
    @else
        <div class="space-y-6">
            @foreach ($bookmarkedMedicines as $bookmark)
                <div class="flex flex-col md:flex-row gap-4 p-4 border rounded-lg shadow-sm">
                    <!-- Gambar -->
                    <div class="md:w-1/4 flex items-center justify-center">
                        <img src="{{ $bookmark->medicine->gambar }}" alt="{{ $bookmark->medicine->nama }}"
                             class="w-40 h-auto object-contain">
                    </div>

                    <!-- Informasi Obat -->
                    <div class="md:w-3/4">
                        <h3 class="text-lg font-semibold">{{ $bookmark->medicine->nama_obat }}</h3>
                        <p class="text-sm text-gray-700"><strong>Komposisi:</strong> {{ $bookmark->medicine->komposisi }}</p>
                        <p class="text-sm text-gray-700"><strong>Dosis:</strong> {{ $bookmark->medicine->dosis }}</p>
                        <p class="text-sm text-gray-700"><strong>Efek Samping:</strong> {{ $bookmark->medicine->efek_samping }}</p>
                        <p class="text-sm text-gray-700"><strong>Peringatan:</strong> {{ $bookmark->medicine->peringatan }}</p>

                        <!-- Tombol Informasi Obat -->
                        <a href="{{ route('medicine.detail', $bookmark->medicine->id) }}" 
                           class="mt-3 px-4 py-2 bg-blue-500 text-white rounded-md text-sm hover:bg-blue-600 inline-block">
                            Informasi Obat
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    @endif
</div>
@endsection