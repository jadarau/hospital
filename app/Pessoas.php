<?php

namespace App\Pessoas;

use Illuminate\Database\Eloquent\Model;

class Pessoas extends Model
{

    protected $table = 'pessoas';
    protected $primaryKey = 'cod';

    // Executa uma query com parâmetros de restrição (WHERE e LIMIT)
    // organizando pelas colunas especificadas
    // public function filtro(){

    // Pessoas::where('product_line_id',1)
    // ->orderBy('product_line_id','description')
    // ->take(10)
    // ->get();

    // }
    


}
