<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MyCourseController extends Controller
{
    public function MyCourse()
    {
    	return view('client.pages.MyCourse');
    }
}
