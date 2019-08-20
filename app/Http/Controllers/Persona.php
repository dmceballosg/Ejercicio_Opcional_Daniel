<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Persona extends Controller
{
    public function index($codigo){
        if ($codigo == 'A765'){
            return view('zonaInicio');
        }
        else
            return view('prohibido');
    }
}
