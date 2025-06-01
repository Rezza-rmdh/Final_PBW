<?php

use App\Models\Medicine;
use App\Models\SearchHistory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $query = $request->input('query');
        $medicines = Medicine::where('nama', 'like', "%{$query}%")->get();

        // Simpan riwayat pencarian jika user masuk
        if (Auth::check()) {
            foreach ($medicines as $medicine) {
                SearchHistory::create([
                    'user_id' => Auth::id(),
                    'medicine_id' => $medicine->id,
                ]);
            }
        }

        return view('search.results', compact('medicines'));
    }
}