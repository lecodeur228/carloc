<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class messagesController extends Controller
{
    public function index()
    {
        return view('messages.index');
    }
}
