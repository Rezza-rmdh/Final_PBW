<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medicine extends Model
{
    use HasFactory;

    protected $table = 'medicines';
    protected $fillable = [
        'nama', 'komposisi', 'indikasi_umum', 'dosis', 'efek_samping',
        'kontradiksi', 'peringatan', 'deskripsi', 'gambar'
    ];

    // Relasi ke SearchHistory
    public function searchHistories()
    {
        return $this->hasMany(SearchHistory::class);
    }

    // Relasi ke Bookmark
    public function bookmarks()
    {
        return $this->hasMany(Bookmark::class);
    }
}