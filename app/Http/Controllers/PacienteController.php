<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use App\Pessoas;

class PacienteController extends Controller
{
    //
    public function cadastro(Request $request){
        
        if($request->input(array('name'=>'nome')) != '' && $request->input(array('name'=>'mae')) != ''){

            $pessoas = new Pessoas();
            $pessoas->sus = $request->sus;
            $pessoas->cpf = $request->cpf;
            $pessoas->nasc = $request->nasc;
            $pessoas->nome = $request->nome;
            $pessoas->mae = $request->mae;
            $pessoas->cep = $request->cep;
            $pessoas->ende = $request->ende;
            $pessoas->cidade = $request->cidade;
            $pessoas->bairro = $request->bairro;
            $pessoas->tel = $request->tel;
            $pessoas->save();

            //redireciona para tela de recepção
            return redirect()->action('MenuController@recepcao');

        }else{

            //echo "Informe os dados obrigatórios do paciente!";

            //redireciona para tela de cadastro
            //return redirect('MenuController@paciente')->with('status', 'Profile updated!');
            //return redirect()->action('MenuController@paciente');
            //return back()->withInput();
            //return redirect()->route('paciente');
            return redirect('paciente');

        }
        

    }

    public function localizar(){

        return view ('pages/buscapac');

    }
    
    public function editar($id){

        $pessoas = Pessoas::find($id);

        $pessoas->nome = 'Novo Name';

        $flight->save();

    }

    public function excluir(){

    }
}
