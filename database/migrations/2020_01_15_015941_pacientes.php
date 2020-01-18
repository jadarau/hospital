<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Pacientes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('pacientes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->char('cns',11);
            $table->binary('respfamily');
            $table->char('cnsresp',11);
            $table->char('microarea',2);
            $table->binary('fa');
            $table->string('nome',35);
            $table->string('nomesocial',35);
            $table->char('raca',2);
            $table->char('etnia',2);            
            $table->char('nis',11);            
            $table->date('nasc');
            $table->integer('sexo');
            $table->string('mae',35);
            $table->string('pai',35);
            $table->integer('nacionalidade');
            $table->char('paisnasc',2);
            $table->date('datanatura');
            $table->char('portaria',15);
            $table->char('ufnasc',2);
            $table->char('muninasc',7);
            $table->date('dtentrada');
            $table->char('celular',15);
            $table->string('email',30);
            $table->char('parentesco',2);
            $table->string('ocupacao',25);
            $table->binary('escolacreche');
            $table->char('curso',2);
            $table->char('mercadotrab',2);
            $table->char('criancas',2);
            $table->binary('cuidador');
            $table->binary('grupocomunity');
            $table->binary('planoprivado');
            $table->char('comunitytrad',20);
            $table->char('orientacao',2);
            $table->char('genero',2);
            $table->binary('deficiencia');            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::dropIfExists('pacientes');
    }
}
