<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserMobileController extends Controller
{
    public function index()
    {
        return view('user_mobile');
    }
}
