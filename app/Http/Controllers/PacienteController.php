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

        return view ('pages/parametro');

    }
    
    public function editar(Request $request, $id = null){

        // if(!empty($id)){

            //echo "Veio";

            // echo "<pre>";
            //     var_dump($id);
            // echo "</pre>";
            // die();

            return view('pages/parametro')->with('id', $id);

        
    }

    public function excluir(){

    }

    public function direciona($id)
    {   

        $pessoas = Pessoas::find($id);

        return view('pages.parametro')->with('pessoas', $pessoas);
        //return "O Nome da pessoa é:".$pessoas->nome;
        
    }

    public function direciona2($id)
    {   

        //$pessoas = Pessoas::find($id);

        return view('pages.parametro');
        //return "O Nome da pessoa é:".$pessoas->nome;
        
    }

    public function ajaxRequestPost(Illuminate\Http\Request $request)
    {
        if ($request->isMethod('post')){ 
            return view('pages.paciente');
        }

        return response()->json(['response' => 'This is get method']);
    }
}
