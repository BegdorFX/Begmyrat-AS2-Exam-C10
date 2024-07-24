<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CreateAnnouncementController extends Controller
{
    public function create()
    {
        return view('Createtable.create');
    }
}
