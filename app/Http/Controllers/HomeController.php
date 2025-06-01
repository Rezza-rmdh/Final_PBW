<?php

namespace App\Http\Controllers;

use App\Models\Bookmark;
use App\Models\SearchHistory;
use App\Models\Medicine;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        // Ambil Obat Populer
        $popularMedicines = DB::table('search_histories')
            ->join('medicines', 'search_histories.medicine_id', '=', 'medicines.id')
            ->select('medicines.id', 'medicines.nama', 'medicines.gambar', DB::raw('COUNT(search_histories.medicine_id) as count'))
            ->groupBy('medicines.id', 'medicines.nama', 'medicines.gambar')
            ->orderByDesc('count')
            ->limit(3)
            ->get();

        // Ambil Riwayat Pencarian User (5 terakhir)
        $searchHistories = SearchHistory::where('user_id', Auth::id())
            ->with('medicine')
            ->latest()
            ->limit(5)
            ->get();

        // Ambil Bookmarks (3 terakhir)
        $bookmarkedMedicines = Bookmark::where('user_id', Auth::id())
            ->with('medicine')
            ->latest()
            ->limit(3)
            ->get();

        return view('home', compact('popularMedicines', 'searchHistories', 'bookmarkedMedicines'));
    }
}