<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function dropNav() {
       return view('menu.dropNav');
    }

    public function rollNav() {
       return view('menu.rollNav');
    }
}
