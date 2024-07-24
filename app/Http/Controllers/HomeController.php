<?php

namespace App\Http\Controllers;

use App\Models\Announcement;


class HomeController extends Controller
{
    public function index()
    {
        return view('index', ['data' => Announcement::all()]);

        $popular = Announcement::where('stock', '>', 0)
            ->orderBy('viewed', 'desc')
            ->take(6)
            ->get();
    }
}
