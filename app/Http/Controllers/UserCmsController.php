<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserCmsController extends Controller
{
    public function index()
    {
        return view('user_cms');
    }
}
