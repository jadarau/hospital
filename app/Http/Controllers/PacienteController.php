<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use App\Pessoas;
use Illuminate\Support\Facades\Validator;

class PacienteController extends Controller
{

    // public function messages()
    // {
    //     return [
    //         'nasc.required' => 'Data de nascimento obrigatório',
    //         'nome.required'  => 'Nome do paciente obrigatório',
    //         'mae.required'  => 'Nome da mãe do paciente obrigatório'
    //     ];  
    // }
    //
    public function cadastro(Request $request){
        
       if($request->input(array('name'=>'id')) == '' || $request->input(array('name'=>'id')) == null){ 

        if($request->input(array('name'=>'nasc')) != '' && $request->input(array('name'=>'nome')) != '' && $request->input(array('name'=>'mae')) != ''){

            // $request -> validate([
            //     //'nasc'=>'required',
            //     'nome'=>'required',
            //     'mae'=>'required'
            // ]);
            
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

                return view ('pages.paciente');

                }

    }else{//se id nao vazio, edita            
            $id = $request->input(array('name'=>'id'));

            $pessoas = Pessoas::find($id);

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

            return redirect()->action('MenuController@recepcao');

        }

    }

    public function localizar(){

        return view ('pages/parametro');

    }
    
    public function editar($id = null){        

        $pessoas = Pessoas::find($id);

        //if(!empty($pessoas)){

            return view('pages.editarpac')->with('pessoas', $pessoas);

          //  }else{
            //    return view('pages.paciente');
           // }
        
    }

    public function excluir(){

    }

    public function direciona($id)
    {   

        $pessoas = Pessoas::find($id);

        return view('pages.editarpac')->with('pessoas', $pessoas);
        
    }

    
}
