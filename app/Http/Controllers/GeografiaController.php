<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Paises;
use App\Municipios;
use App\Estados;

class GeografiaController extends Controller
{
    //

    public function greopais(){

        $paises = Paises::all();

        

    }

    public function greoestados(){

       // $paises = Estados::all();

    }

    public function greomunicipios(){

        //$paises = Municipios::all();

    }
}
