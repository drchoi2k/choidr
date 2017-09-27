<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GnbController extends Controller
{      
	public function gnb() {
       return view('menu.gnb');
    } 
}
 