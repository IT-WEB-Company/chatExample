<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UIKitController extends Controller
{
    public function grids()
    {
        return view('grids');
    }

    public function typography()
    {
        return view('typography');
    }

    public function syntaxHighlighter()
    {
        return view('syntax-highlighter');
    }
    public function helperClasses()
    {
        return view('helper-classes');
    }

    public function textUtilities()
    {
        return view('text-utilities');
    }
}
