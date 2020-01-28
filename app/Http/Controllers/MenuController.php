<?php

namespace App\Http\Controllers;

use App\Pessoas;
use App\Pacientes;
use App\Paises;
use App\Estados;
use App\Nacionalidades;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class MenuController extends Controller
{
    //
    public function home(){
      
        return view('principal/pages/home');
        
    }

    public function hospital(){

        return view('hospital/pages/home');

    }

    public function ubs(){

        return view('ubs/pages/home');

    }

    public function classificacao(){

            // $results = Pacientes::all();

            // return $results->toArray();
            
            // return view('pages/classificacao');

            //return view('pessoa.index', compact('pessoa'));        
        
    }

    public function class(){
      
        return view('pages/class');
        
    }

    public function paciente(Request $request){
        
            $paises = Paises::all();
            $nacions = Nacionalidades::all();
            $estados = Estados::all();
            
            // return view('pages/paciente')->with('paises', $paises);
            return view('pages/pacientenovo')->with(array('nacions' => $nacions,'paises' => $paises,'estados' => $estados));
        
    }

    public function recepcao(){
      
        // $pessoas = Pessoas::all();
        // return view('pages.recepcao')->with('pacientes', $pessoas);
        $pacientes = Pacientes::all();
        return view('ubs.pages.localizapac')->with('pacientes', $pacientes);
        
        
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
