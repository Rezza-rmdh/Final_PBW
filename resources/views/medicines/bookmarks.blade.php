<h2>Obat yang Anda Bookmark</h2>
@foreach ($bookmarkedMedicines as $bookmark)
    <div>
        <h3>{{ $bookmark->medicine->nama }}</h3>
        <img src="{{ $bookmark->medicine->gambar }}" alt="{{ $bookmark->medicine->nama }}">
        <a href="{{ route('medicine.detail', $bookmark->medicine->id) }}">Lihat Detail</a>
    </div>
@endforeach