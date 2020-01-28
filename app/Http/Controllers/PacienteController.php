<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use App\Pessoas;
use App\Pacientes;
use App\Paises;
use App\Estados;
use App\Nacionalidades;
use Illuminate\Support\Facades\Validator;

class PacienteController extends Controller
{

    // public function paciente(){

    //         $paises = Paises::all();
    //         $nacions = Nacionalidades::all();
    //         $estados = Estados::all();
            
    //         // return view('pages/paciente')->with('paises', $paises);
    //         return view('pages/paciente')->with(array('nacions' => $nacions,'paises' => $paises,'estados' => $estados));
    // }

  
    public function cadastro(Request $request){
        
       if($request->input(array('name'=>'id')) == '' || $request->input(array('name'=>'id')) == null){ 

        if($request->input(array('name'=>'nasc')) != '' && $request->input(array('name'=>'nome')) != '' && $request->input(array('name'=>'mae')) != ''){

            // $request -> validate([
            //     //'nasc'=>'required',
            //     'nome'=>'required',
            //     'mae'=>'required'
            // ]);
            
            
            $pacientes = new Pacientes();
            
            $pacientes->cns=$request->cns;
            $pacientes->respfamily=$request->respfamily;
            $pacientes->cnsresp=$request->cnsresp;
            $pacientes->microarea=$request->microarea;
            $pacientes->fa=$request->fa;
            $pacientes->nome=$request->nome;
            $pacientes->nomesocial=$request->nomesocial;
            $pacientes->raca=$request->raca;
            $pacientes->etnia=$request->etnia;
            $pacientes->nis=$request->nis;
            $pacientes->nasc=$request->nasc;
            $pacientes->sexo=$request->sexo;
            $pacientes->mae=$request->mae;
            $pacientes->pai=$request->pai;
            $pacientes->nacionalidade=$request->nacionalidade;
            $pacientes->paisnasc=$request->paisnasc;
            $pacientes->datanatura=$request->datanatura;
            $pacientes->portaria=$request->portaria;
            $pacientes->ufnasc=$request->ufnasc;
            $pacientes->muninasc=$request->muninasc;
            $pacientes->endereco=$request->endereco;
            $pacientes->numero=$request->numero;
            $pacientes->cep=$request->cep;
            $pacientes->uf=$request->uf;
            $pacientes->city=$request->city;
            $pacientes->bairro=$request->bairro;
            $pacientes->passaport=$request->passaport;
            $pacientes->unidade=$request->unidade;
            $pacientes->dtentrada=$request->dtentrada;
            $pacientes->celular=$request->celular;
            $pacientes->email=$request->email;
            $pacientes->parentesco=$request->parentesco;
            $pacientes->ocupacao=$request->ocupacao;
            $pacientes->escolacreche=$request->escolacreche;
            $pacientes->curso=$request->curso;
            $pacientes->mercadotrab=$request->mercadotrab;
            $pacientes->criancas=$request->criancas;
            $pacientes->cuidador=$request->cuidador;
            $pacientes->grupocomunity=$request->grupocomunity;
            $pacientes->planoprivado=$request->planoprivado;
            $pacientes->comunitytrad=$request->comunitytrad;
            $pacientes->orientacao=$request->orientacao;
            $pacientes->genero=$request->genero;
            $pacientes->deficiencia=$request->deficiencia;
            $pacientes->save();

            // $request->id;           
            

            //redireciona para tela de recepção
            return redirect()->action('MenuController@recepcao');

            }else{

                return view ('pages.paciente');

                }

    }else{//se id nao vazio, edita            
            $id = $request->input(array('name'=>'id'));

            // $pessoas = Pessoas::find($id);

            // $pessoas->sus = $request->sus;
            // $pessoas->cpf = $request->cpf;
            // $pessoas->nasc = $request->nasc;
            // $pessoas->nome = $request->nome;
            // $pessoas->mae = $request->mae;
            // $pessoas->cep = $request->cep;
            // $pessoas->ende = $request->ende;
            // $pessoas->cidade = $request->cidade;
            // $pessoas->bairro = $request->bairro;
            // $pessoas->tel = $request->tel;
            // $pessoas->save();

            $pacientes = Pacientes::find($id);

            $pacientes->cns=$request->cns;
            $pacientes->respfamily=$request->respfamily;
            $pacientes->cnsresp=$request->cnsresp;
            $pacientes->microarea=$request->microarea;
            $pacientes->fa=$request->fa;
            $pacientes->nome=$request->nome;
            $pacientes->nomesocial=$request->nomesocial;
            $pacientes->raca=$request->raca;
            $pacientes->etnia=$request->etnia;
            $pacientes->nis=$request->nis;
            $pacientes->nasc=$request->nasc;
            $pacientes->sexo=$request->sexo;
            $pacientes->mae=$request->mae;
            $pacientes->pai=$request->pai;
            $pacientes->nacionalidade=$request->nacionalidade;
            $pacientes->paisnasc=$request->paisnasc;
            $pacientes->datanatura=$request->datanatura;
            $pacientes->portaria=$request->portaria;
            $pacientes->ufnasc=$request->ufnasc;
            $pacientes->muninasc=$request->muninasc;
            $pacientes->endereco=$request->endereco;
            $pacientes->numero=$request->numero;
            $pacientes->cep=$request->cep;
            $pacientes->uf=$request->uf;
            $pacientes->city=$request->city;
            $pacientes->bairro=$request->bairro;
            $pacientes->passaport=$request->passaport;
            $pacientes->unidade=$request->unidade;
            $pacientes->dtentrada=$request->dtentrada;
            $pacientes->celular=$request->celular;
            $pacientes->email=$request->email;
            $pacientes->parentesco=$request->parentesco;
            $pacientes->ocupacao=$request->ocupacao;
            $pacientes->escolacreche=$request->escolacreche;
            $pacientes->curso=$request->curso;
            $pacientes->mercadotrab=$request->mercadotrab;
            $pacientes->criancas=$request->criancas;
            $pacientes->cuidador=$request->cuidador;
            $pacientes->grupocomunity=$request->grupocomunity;
            $pacientes->planoprivado=$request->planoprivado;
            $pacientes->comunitytrad=$request->comunitytrad;
            $pacientes->orientacao=$request->orientacao;
            $pacientes->genero=$request->genero;
            $pacientes->deficiencia=$request->deficiencia;
            $pacientes->save();

            return redirect()->action('MenuController@recepcao');

        }

    }

    public function localizar(){

        $pacientes = Pacientes::all();
        return view ('ubs/pages/localizapac')->with('pacientes', $pacientes);

    }
    
    public function editar($id = null){        

            $paises = Paises::all();
            $nacions = Nacionalidades::all();
            $estados = Estados::all();
       
            $pacientes = Pacientes::find($id);

            // return view('pages.editarpacrecep')->with(array('nacions' => $nacions,'paises' => $paises,'estados' => $estados,'pessoas', $pacientes));
            return view('ubs/pages/pacientes/editarpac')->with(array('nacions' => $nacions,'paises' => $paises,'estados' => $estados,'pacientes' => $pacientes));

         
    }

    public function excluir(){

    }

    public function direciona($id)
    {   

        $pacientes = Pacientes::find($id);

        return view('pages.editarpac')->with('pessoas', $pacientes);
        
    }

    
}
