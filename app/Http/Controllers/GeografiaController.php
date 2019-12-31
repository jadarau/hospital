<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Paises;
use App\Municipios;
use App\Estados;

class GeografiaController extends Controller
{
    //

    public function geopais(){

        $paises = Paises::all();

        return response()->json([
            'cod' => $paises->ibge,
            'desc' => $paises->descricao
        ]);

    }

    public function geoestados(){

       // $paises = Estados::all();

    }

    public function geomunicipios(){

        //$paises = Municipios::all();

    }
}
