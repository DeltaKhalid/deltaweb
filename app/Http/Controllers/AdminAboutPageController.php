<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminAboutPageController extends Controller
{
    //
    public function index()
    {
        return view('admin.admin_about_page');
    }
}
