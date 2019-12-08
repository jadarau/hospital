<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pessoas;


class ClassificaController extends Controller
{
    //
    public function index(){

        $pessoas = Pessoas::all();
        // return view('pages.classificacao');
        return view('pages.classificacao')->with('pacientes', $pessoas);

    }

    public function result(){

        $pessoas = Pessoas::all();
        //$pessoas = \App\Pessoas::first();
        
        //return view('templates.resultado',['pacientes'=>count($pessoas)]);
        //return view('templates.resultado')->with(['pacientes' => count($pessoas)]);
        //$pacientes[] = $pessoas->toArray();                
        
        //return Pessoas::all()
        
        // foreach ($pessoas as $pessoa) {
        //     $i++;
        //     echo (String)$pessoa[$i]->nome;
        // }
        
        //return view('templates.resultado',['pacientes'=>$pessoas]);
        return view('pages.resultado')->with('pacientes', $pessoas);
       
    }

}
