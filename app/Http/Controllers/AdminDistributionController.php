<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminDistributionController extends Controller
{
    //
    public function index()
    {
        return view('admin.admin_distribution');
    }
}
