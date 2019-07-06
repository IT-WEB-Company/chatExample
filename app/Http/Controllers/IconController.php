<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IconController extends Controller
{
    public function feather()
    {
        return view('feather');
    }

    public function fontAwesome()
    {
        return view('font-awesome');
    }

    public function simpleLine()
    {
        return view('simple-line');
    }
}
