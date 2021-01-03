<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    // view trang client
    public function index()
    {
        return view('client.index');
    }
}
