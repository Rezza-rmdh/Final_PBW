@extends('layouts.app')

@section('title', 'Riwayat Pencarian')

@section('content')
<div class="container mx-auto px-4 py-8">
    <!-- Judul dengan Margin dari Navbar -->
    <h2 class="text-2xl font-semibold text-center mb-6">Riwayat Pencarian Anda</h2>

    @if($searchHistories->isEmpty())
        <p class="text-center text-gray-600">Belum ada riwayat pencarian.</p>
    @else
        <!-- Box Border untuk Riwayat Pencarian -->
        <div class="max-w-4xl mx-auto border rounded-lg shadow-md p-6 bg-white space-y-4">
            @foreach ($searchHistories as $history)
                <div class="border rounded-md shadow-sm p-4 flex items-center gap-4 bg-gray-50">
                    <div class="flex-grow">
                        <h4 class="text-lg font-semibold">{{ $history->medicine->nama_obat }}</h4>
                        <p class="text-sm text-gray-500">Dicari pada: {{ $history->created_at->format('d M Y') }}</p>
                    </div>
                    <a href="{{ route('medicine.detail', $history->medicine->id) }}" class="px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600">Lihat Detail</a>
                </div>
            @endforeach
        </div>
    @endif
</div>
@endsection