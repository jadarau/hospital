<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PacienteController extends Controller
{
    //
    public function cadastro(Request $request){
        
        if($request->input(array('name'=>'nome')) != '' && $request->input(array('name'=>'mae')) != ''){

            Print_r($request->input());

        }else{

            echo "Informe os dados do paciente!";
        }
        

    }

    public function localizar(){

        return view ('pages/buscapac');

    }
    
    public function editar(){

    }

    public function excluir(){

    }
}
