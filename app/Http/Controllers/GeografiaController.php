<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Paises;
use App\Municipios;

use Illuminate\Support\Facades\DB;

class GeografiaController extends Controller
{
    //

    public function geopais(){

        $paises = Paises::list('descricao','ibge');

        // return response()->json([
        //     'cod' => $paises->ibge,
        //     'desc' => $paises->descricao
        // ]);

    }

    public function estados(Request $request){

        if($request->ajax()){   
                        
            $pais = $request->get('paises');            
            
            $estados = DB::table('estados')
                            ->where('codpais',$pais)
                            ->orderBy('uf', 'asc')
                            ->get();                          

            // $json = json_enconde($estadoArray);
            return response()->json($estados);

        }
        
    }

    public function geomunicipios(){

        //$paises = Municipios::all();

    }
}
