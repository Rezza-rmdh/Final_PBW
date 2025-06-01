<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bookmark extends Model
{
    use HasFactory;

    protected $table = 'bookmarks';
    protected $fillable = ['user_id', 'medicine_id'];

    // Relasi ke User
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Relasi ke Medicine
    public function medicine()
    {
        return $this->belongsTo(Medicine::class);
    }
}
