<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminBoardOfDirectorPageController extends Controller
{
    //
    public function index()
    {
        return view('admin.admin_board_of_director');
    }
}
