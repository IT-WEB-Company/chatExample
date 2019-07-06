<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index_1()
    {
        return view('dashboard1');
    }

    public function index_2()
    {
        return view('dashboard2');
    }
}
