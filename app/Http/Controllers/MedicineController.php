<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MedicineController extends Controller
{
    public function show($id)
    {
        $medicine = Medicine::findOrFail($id);

        // Simpan riwayat pencarian jika user masuk
        if (Auth::check()) {
            SearchHistory::create([
                'user_id' => Auth::id(),
                'medicine_id' => $medicine->id,
            ]);
        }

        return view('medicines.detail', compact('medicine'));

    }
}
