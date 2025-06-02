<?php

namespace App\Http\Controllers;

use App\Models\Medicine;
use App\Models\SearchHistory;
use App\Models\Bookmark;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class MedicineController extends Controller
{
    public function show($id)
    {
        $medicine = Medicine::findOrFail($id);

        // Cek apakah obat sudah di-bookmark oleh user
        $isBookmarked = Auth::check() && Bookmark::where('user_id', Auth::id())
                                ->where('medicine_id', $medicine->id)
                                ->exists();

        // Simpan riwayat pencarian jika user masuk
        if (Auth::check()) {
            SearchHistory::create([
                'user_id' => Auth::id(),
                'medicine_id' => $medicine->id,
            ]);
        }

        return view('medicines.detail', compact('medicine', 'isBookmarked'));
    }
}
