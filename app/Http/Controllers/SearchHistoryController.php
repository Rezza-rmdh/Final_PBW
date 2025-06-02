<?php

namespace App\Http\Controllers;

use App\Models\SearchHistory;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class SearchHistoryController extends Controller
{
    public function index()
    {
        $searchHistories = SearchHistory::where('user_id', Auth::id())
            ->with('medicine')
            ->latest()
            ->get();

        return view('medicines.riwayat', compact('searchHistories'));
    }
}
