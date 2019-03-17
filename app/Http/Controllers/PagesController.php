<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title = 'Bienvenido';
        return view('pages.index', compact('title'));
    }


}
