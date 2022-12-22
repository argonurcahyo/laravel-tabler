<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InterfaceController extends Controller
{
    public function buttons()
    {
        return view('pages.interface.buttons');
    }

    public function maps()
    {
        return view('pages.interface.maps');
    }
}
