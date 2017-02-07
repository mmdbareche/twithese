<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ThesesController extends Controller
{
    public function index()
    {
        return view('theses.index');
    }
}
