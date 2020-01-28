<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pacientes;
use App\Paises;
use App\Estados;
use App\Nacionalidades;

class UbsController extends Controller
{
    //
    public function paciente(Request $request = null,$id = null){
        
        $paises = Paises::all();
        $nacions = Nacionalidades::all();
        $estados = Estados::all();

        
        if(!$id){
            $pacientes = new Pacientes();
        //  $pacientes->id = '';
        //  $pacientes->cns = '';
        //  $pacientes->nome = '';
        }else{
            $pacientes = Pacientes::find($id);
        }
        
        // return view('pages/paciente')->with('paises', $paises);
        return view('ubs/pages/pacientes/pacientenovo')->with(array('nacions' => $nacions,'paises' => $paises,'estados' => $estados,'pacientes' => $pacientes));
    
}

}
