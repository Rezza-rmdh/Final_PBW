<?php

namespace App\Http\Controllers;

use App\Models\Bookmark;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BookmarkController extends Controller
{
    public function store($medicine_id)
    {
        Bookmark::create([
            'user_id' => Auth::id(),
            'medicine_id' => $medicine_id,
        ]);

        return redirect()->back()->with('success', 'Obat berhasil di-bookmark!');
    }

    public function index()
    {
        $bookmarkedMedicines = Auth::user()->bookmarks()
            ->with('medicine')
            ->latest()
            ->get();

        return view('medicines.bookmarks', compact('bookmarkedMedicines'));
    }


    public function delete($medicine_id)
    {
        // Cari bookmark berdasarkan user dan medicine_id
        $bookmark = Bookmark::where('user_id', Auth::id())
                            ->where('medicine_id', $medicine_id)
                            ->first();

        if ($bookmark) {
            $bookmark->delete();
            return redirect()->back()->with('success', 'Obat berhasil dihapus dari bookmark!');
        }

        return redirect()->back()->with('error', 'Bookmark tidak ditemukan.');
    }
}
