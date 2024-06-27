<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminMissionPageController extends Controller
{
    //
    public function index()
    {
        return view('admin.admin_mission_page');
    }
}
