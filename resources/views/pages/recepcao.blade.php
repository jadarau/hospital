@extends('templates.recepcao')

@section('title', 'Classificaçao')

@section('sidebar')
    @parent

    @include('menus/menuclass')
    
@endsection

@section('content')

<table class="table table-hover table-striped table-bordered">

      <thead>
        <tr>
          <th class="campo2">Telefone</th>
          <th class="campo">nascimento</th>
          <th >Nome</th>
          <th >Mae</th>
          <th class="campo">Alterar</th>
          <th class="campo">Ficha</th>
          <th class="campo">Sistema</th>     
        </tr>
      </thead>

      <tbody>
      <!--Inserir resultado da busca -->
      @if($pacientes)
        @foreach($pacientes as $paciente)
        <tr>
            <td>{{$paciente->tel}}</td>
            <td>{{$paciente->nasc}}</td>
            <td>{{$paciente->nome}}</td>
            <td>{{$paciente->mae}}</td>
            <td><button type="button" onclick="alterar('alteracad.php?cod2=<?php echo 'cod' ?>')" class="btn btn-secondary btn-sm">Alterar</button></td>            
            <td><button type="button" onclick="agenda('classificar.php?cod2=<?php echo 'cod'?>')" class="btn btn-primary btn-sm">Imprimir</button></td>
            <td><button type="button" onclick="classifica('encaminhar.php?cod2=<?php echo 'cod'?>')" class="btn btn-success btn-sm">Encaminhar</button></td>
        </tr>
        @endforeach
      @endif      
       
      </tbody>

      </table>
    
@endsection   