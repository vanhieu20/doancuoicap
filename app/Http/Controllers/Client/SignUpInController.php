<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SignUpInController extends Controller
{
    public function SignUp()
    {
        return view('client.pages.SignUpIn');
    }
}
