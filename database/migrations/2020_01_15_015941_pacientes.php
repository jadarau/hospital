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
            $table->char('cns',11)->nullable();
            $table->binary('respfamily')->nullable();
            $table->char('cnsresp',11)->nullable();
            $table->char('microarea',2)->nullable();
            $table->binary('fa')->nullable();
            $table->string('nome',35);
            $table->string('nomesocial',35)->nullable();
            $table->char('raca',2)->nullable();
            $table->char('etnia',2)->nullable();            
            $table->char('nis',11)->nullable();            
            $table->date('nasc')->nullable();
            $table->integer('sexo')->nullable();
            $table->string('mae',35)->nullable();
            $table->string('pai',35)->nullable();
            $table->integer('nacionalidade')->nullable();
            $table->char('paisnasc',2)->nullable();
            $table->date('datanatura')->nullable();
            $table->char('portaria',15)->nullable();
            $table->char('ufnasc',2)->nullable();
            $table->char('muninasc',7)->nullable();
            $table->char('endereco',35)->nullable();
            $table->char('numero',6)->nullable();
            $table->char('cep',9)->nullable();
            $table->char('uf',2)->nullable();
            $table->char('city',7)->nullable();
            $table->char('bairro',7)->nullable();
            $table->char('passaport',8)->nullable();
            $table->char('unidade',7)->nullable();
            $table->date('dtentrada')->nullable();
            $table->char('celular',15)->nullable();
            $table->string('email',30)->nullable();
            $table->char('parentesco',2)->nullable();
            $table->string('ocupacao',25)->nullable();
            $table->binary('escolacreche')->nullable();
            $table->char('curso',2)->nullable();
            $table->char('mercadotrab',2)->nullable();
            $table->char('criancas',2)->nullable();
            $table->binary('cuidador')->nullable();
            $table->binary('grupocomunity')->nullable();
            $table->binary('planoprivado')->nullable();
            $table->char('comunitytrad',20)->nullable();
            $table->char('orientacao',2)->nullable();
            $table->char('genero',2)->nullable();
            $table->binary('deficiencia')->nullable();  
            $table->dateTime('created_at')->nullable();  
            $table->dateTime('updated_at')->nullable();  
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
