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

public function ingresar2 (Request $dato){

$nom=$dato->nombre;
$ape=$dato->apellido;
$ced=$dato->cedula;
$pro=$dato->promedio;

$array=array("$nom","$ape","$ced","$pro");
return view('mostrar', compact('array'));

}



}
