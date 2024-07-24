<?php

namespace App\Http\Controllers;

use App\Models\CreateAnnouncement;
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

        $announcement = new CreateAnnouncement();
        $announcement->email = $request->input('email');
        $announcement->subject = $request->input('subject');
        $announcement->message = $request->input('message');

        $announcement->save();

        return redirect()->route('/review');
    }
}
