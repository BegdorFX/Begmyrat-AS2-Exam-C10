<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CreateAnnouncementController extends Controller
{
    public function create()
    {
        return view('Createtable.create');
    }


    public function create_check(Request $request)
    {
        $valid = $request->validate([
            'email' => 'required|min:4|max:100',
            'subject' => 'required|min:4|max:100',
            'message' => 'required|min:30|max:1000',
        ]);
    }
}
