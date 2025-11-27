<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        $prodotti = config('data.prodotti.elettronica');
        
        return view('homepage', ['prodotti' => $prodotti]);
    }
}
