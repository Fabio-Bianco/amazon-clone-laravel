<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfiloController extends Controller
{
    public function index() {
        
        return view('profilo');
    }
}
