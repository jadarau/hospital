<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Pessoas;
use Illuminate\Support\Facades\View;
use Illuminate\Http\Request;


class PessoasController extends Controller
{
    //
    public function index(){
    
    $pessoas = Pessoas::all();

    return view('pessoas.index')->with('pessoas', $pessoas);

        // foreach ($pessoas as $pessoa) {
        //     echo $pessoa->name;    
        // }
    }
}