<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ComponentController extends Controller
{
    public function navbar()
    {
        return view('navbar');
    }

    public function cards()
    {
        return view('cards');
    }
}
