@extends('layouts.app')

@section('title', 'Hasil Pencarian')

@section('content')
<div class="container mx-auto px-4 py-8">
    <!-- Box Pencarian -->
    <div class="max-w-4xl mx-auto mb-6 p-4 bg-gray-100 rounded-lg shadow-md">
        <form action="{{ route('search') }}" method="GET" class="flex">
            <input type="text" name="query" placeholder="Cari obat..." class="flex-grow p-2 border rounded-l-md focus:ring-2 focus:ring-blue-500">
            <button type="submit" class="px-6 py-2 bg-blue-500 text-white rounded-r-md hover:bg-blue-600">Cari</button>
        </form>
    </div>

    <!-- Hasil Pencarian -->
    <h2 class="text-xl font-semibold text-center mb-6">Hasil Pencarian</h2>

    @if($medicines->isEmpty())
        <p class="text-center text-gray-600">Tidak ada obat yang ditemukan.</p>
    @else
        <div class="space-y-4">
            @foreach ($medicines as $medicine)
                <div class="border rounded-lg shadow-md p-4 flex items-center gap-4 bg-white">
                    <img src="{{ $medicine->gambar }}" alt="{{ $medicine->nama_obat }}" class="w-24 h-24 object-cover rounded-md">
                    <div class="flex-grow">
                        <h4 class="text-lg font-semibold">{{ $medicine->nama_obat }}</h4>
                    </div>
                    <a href="{{ route('medicine.detail', $medicine->id) }}" class="px-4 py-2 bg-green-500 text-white rounded-md hover:bg-green-600">Lihat Detail</a>
                </div>
            @endforeach
        </div>
    @endif
</div>
@endsection