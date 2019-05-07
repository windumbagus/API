<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ActiveLeadsController extends Controller
{
    public function index()
    {
        return view('active_leads');
    }
}
