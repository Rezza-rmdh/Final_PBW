@extends('layouts.app')

@section('title', 'Detail Obat')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <img src="{{ $medicine->gambar }}" alt="{{ $medicine->nama }}" class="img-fluid">
        </div>

        <div class="col-md-8">
            <h2>{{ $medicine->nama }}</h2>
        </div>
    </div>

    <!-- Penjelasan informasi obat -->
    <div class="mt-4">
        <h4>Informasi Lengkap</h4>
        <p><strong>Komposisi:</strong> {{ $medicine->komposisi }}</p>
        <p><strong>Indikasi:</strong> {{ $medicine->indikasi_umum }}</p>
        <p><strong>Dosis:</strong> {{ $medicine->dosis }}</p>
        <p><strong>Efek Samping:</strong> {{ $medicine->efek_samping }}</p>
        <p><strong>Kontraindikasi:</strong> {{ $medicine->kontradiksi }}</p>
        <p><strong>Peringatan:</strong> {{ $medicine->peringatan }}</p>
        <p><strong>Deskripsi:</strong> {{ $medicine->deskripsi }}</p>
    </div>

    <!-- Tombol Bookmark -->
    @if ($isBookmarked)
        <form action="{{ route('medicine.bookmark.remove', $medicine->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Hapus dari Bookmark</button>
        </form>
    @else
        <form action="{{ route('medicine.bookmark', $medicine->id) }}" method="POST">
            @csrf
            <button type="submit" class="btn btn-primary">Bookmark Obat Ini</button>
        </form>
    @endif

</div>
@endsection