<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ComponentController extends Controller
{
    public function returnComponent()
    {
        return view('components-badges');
    }
}
