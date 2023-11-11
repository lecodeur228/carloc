<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class clientController extends Controller
{
    public function index()
    {
        $clients = Client::get();
        return view('clients.index',compact('clients'));
    }
}
