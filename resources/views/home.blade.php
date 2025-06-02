@extends('layouts.app')

@section('title', 'Home')

@section('content')
<div class="max-w-7xl mx-auto px-4 py-10">

    <!-- Judul -->
    <h1 class="text-center text-3xl font-bold text-gray-700 mb-6">Temukan Obat</h1>

    <!-- Box Pencarian -->
    <div class="flex justify-center mb-8">
        <div class="w-full max-w-md bg-white shadow-lg rounded-lg p-6">
            <form action="{{ route('search') }}" method="GET">
                <input type="text" name="query" placeholder="Cari obat..." class="w-full border border-gray-300 rounded px-4 py-2 mb-3">
                <button type="submit" class="w-full bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Cari</button>
            </form>
        </div>
    </div>

    <!-- Obat Populer -->
    <div class="bg-white shadow-lg rounded-lg p-6 mb-8">
        <h2 class="text-2xl font-semibold mb-4">Obat Populer</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            @foreach ($popularMedicines as $medicine)
                <div class="border rounded-lg p-4 text-center">
                    <h4 class="font-bold text-xl mb-2">{{ $medicine->nama_obat }}</h4>
                    <img src="{{ $medicine->gambar }}" alt="{{ $medicine->nama_obat }}" class="mx-auto w-24 h-24 object-cover mb-3">
                    <a href="{{ route('medicine.detail', $medicine->id) }}" class="block bg-blue-500 text-white px-3 py-1 rounded hover:bg-blue-600">Lihat Detail</a>
                </div>
            @endforeach
        </div>
    </div>

    <!-- Riwayat Pencarian -->
    <div class="bg-white shadow-lg rounded-lg p-6 mb-8">
        <h2 class="text-2xl font-semibold mb-4">Riwayat Pencarian Anda</h2>
        <div class="space-y-4">
            @if($searchHistories->isEmpty())
                <p class="text-gray-500">Belum ada riwayat pencarian.</p>
            @else
                @foreach ($searchHistories->take(5) as $history)
                    <div class="border rounded-lg p-4 flex items-center gap-4">
                        <img src="{{ $history->medicine->gambar }}" alt="{{ $history->medicine->nama_obat }}" class="w-16 h-16 object-cover rounded">
                        <div>
                            <h4 class="font-bold text-xl">{{ $history->medicine->nama_obat }}</h4>
                            <p class="text-gray-500 text-sm">Dicari pada: {{ $history->created_at->format('d M Y, H:i') }}</p>
                            <a href="{{ route('medicine.detail', $history->medicine->id) }}" class="text-blue-500 hover:underline">Lihat Detail</a>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>
    </div>

    <!-- Bookmarks Obat -->
    <div class="bg-white shadow-lg rounded-lg p-6 mb-8">
        <h2 class="text-2xl font-semibold mb-4">Obat yang Anda Simpan</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            @if($bookmarkedMedicines->isEmpty())
                <p class="text-gray-500">Anda belum menyimpan obat apapun.</p>
            @else
                @foreach ($bookmarkedMedicines as $bookmark)
                    <div class="border rounded-lg p-4 text-center">
                        <h4 class="font-bold text-xl mb-2">{{ $bookmark->medicine->nama_obat }}</h4>
                        <img src="{{ $bookmark->medicine->gambar }}" alt="{{ $bookmark->medicine->nama_obat }}" class="mx-auto w-24 h-24 object-cover mb-3">
                        <a href="{{ route('medicine.detail', $bookmark->medicine->id) }}" class="block bg-blue-500 text-white px-3 py-1 rounded hover:bg-blue-600">Lihat Detail</a>
                    </div>
                @endforeach
            @endif
        </div>
    </div>

</div>
@endsection