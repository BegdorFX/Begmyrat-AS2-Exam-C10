<?php

namespace App\Http\Controllers;

use App\Models\Announcement;
use App\Models\Product;
use Illuminate\Http\Request;

class PopularController extends Controller
{
    public function popular()
    {
        $popular = Announcement::where('stock', '>', 0)
            ->orderBy('viewed', 'desc')
            ->take(6)
            ->get();


        return view('popular.popular')
            ->with([
                'popular' => $popular,
            ]);
    }
}
