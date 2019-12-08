<?php

namespace App\Http\Controllers;

use App\Pessoas;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class MenuController extends Controller
{
    //
    public function home(){
      
        return view('pages/home');
        
    }

    public function classificacao(){

            // $results = App\Pessoas::all();

            // return $results->toArray();
            
            // return view('pages/classificacao');

            

            //return view('pessoa.index', compact('pessoa'));
        
        
    }

    public function class(){
      
        return view('pages/class');
        
    }

    public function pacclass(){
      
        return view('pages/paciente');
        
    }

    public function recepcao(){
      
        $pessoas = Pessoas::all();
        // return view('pages.classificacao');
        return view('pages.recepcao')->with('pacientes', $pessoas);
        
        
    }

    public function atendimento(){
      
        return view('pages/atendimento');
        
    }

    public function internacao(){
      
        return view('pages/internacao');
        
    }

    public function profissional(){
      
        return view('pages/profissional');
        
    }

    public function enfermaria(){
      
        return view('pages/enfermaria');
        
    }

    public function leito(){
      
        return view('pages/leito');
        
    }

    public function laboratorio(){
      
        return view('pages/leito');
        
    }
}
