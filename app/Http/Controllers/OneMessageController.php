<?php

namespace App\Http\Controllers;

use App\Models\Announcement;
use Illuminate\Http\Request;

class OneMessageController extends Controller
{
    public function OneMessage($id){
        $message = new Announcement;
        return view('show.onmessage', ['data' => $message->find($id)]);
    }
}
