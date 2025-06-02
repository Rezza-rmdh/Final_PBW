@extends('layouts.app')

@section('title', 'Detail Obat')

@section('content')
<div class="container mx-auto px-4 py-8">
    <!-- Detail Obat -->
    <div class="max-w-4xl mx-auto flex items-center gap-6 bg-white border rounded-lg shadow-md p-6">
        <!-- Gambar Obat -->
        <img src="{{ $medicine->gambar }}" alt="{{ $medicine->nama_obat }}" class="w-40 h-40 object-cover rounded-md">

        <!-- Informasi Obat di Sebelah Kanan Gambar -->
        <div class="flex-grow">
            <h2 class="text-2xl font-semibold">{{ $medicine->nama_obat }}</h2>
            <p class="text-gray-700 mt-2"><strong>Deskripsi:</strong> {{ $medicine->deskripsi }}</p>
            <p class="text-gray-600"><strong>Komposisi:</strong> {{ $medicine->komposisi }}</p>  
        </div>
    </div>

    <!-- Informasi Lengkap -->
    <div class="max-w-4xl mx-auto mt-6 border rounded-lg p-6 shadow-md bg-white">
        <h4 class="text-lg font-semibold mb-4">Informasi Lengkap</h4>
        <p><strong>Indikasi:</strong> {{ $medicine->indikasi_umum }}</p>
        <p><strong>Dosis:</strong> {{ $medicine->dosis }}</p>
        <p><strong>Efek Samping:</strong> {{ $medicine->efek_samping }}</p>
        <p><strong>Kontraindikasi:</strong> {{ $medicine->kontraindikasi }}</p>
        <p><strong>Peringatan:</strong> {{ $medicine->peringatan }}</p>
    </div>

    <!-- Tombol Bookmark -->
    <div class="max-w-4xl mx-auto mt-6 text-center">
        @if ($isBookmarked)
            <form action="{{ route('medicine.bookmark.remove', $medicine->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="px-4 py-2 bg-red-500 text-white rounded-md hover:bg-red-600">
                    Hapus dari Bookmark
                </button>
            </form>
        @else
            <form action="{{ route('medicine.bookmark', $medicine->id) }}" method="POST">
                @csrf
                <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600">
                    Bookmark Obat Ini
                </button>
            </form>
        @endif
    </div>
</div>
@endsection