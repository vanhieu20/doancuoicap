<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SubjectsDetailController extends Controller
{
    public function subjects()
    {
        return view('client.pages.SubjectsDetail');
    }
}
