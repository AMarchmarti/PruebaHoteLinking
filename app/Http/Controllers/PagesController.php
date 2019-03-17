<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title = 'Bienvenido';
        return view('pages.login', compact('title'));
    }

    public function offers(){
        $title = 'Ofertas';
        return view('pages.offers', compact('title'));
    }
}
