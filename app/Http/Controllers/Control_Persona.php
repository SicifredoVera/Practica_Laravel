<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Control_Persona extends Controller
{

public function ingresar(){
        return view('ingresar');
    }

public function mostrar(){
        return view('mostrar');
    }




}
