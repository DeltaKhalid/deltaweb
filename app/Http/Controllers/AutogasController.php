<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AutogasController extends Controller
{
    //
    public function index()
    {
        return view('frontend.autogas');
    }
}
