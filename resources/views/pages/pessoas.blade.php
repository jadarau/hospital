@extends('menus/menuclass')

@section('title', 'Classificaçao')

@section('sidebar')
    
    @section('content')

    
    <table class="table table-hover table-striped table-bordered">

      <thead>
        <tr>
          <th class="campo2">Telefone</th>
          <th class="campo">nascimento</th>
          <th >Nome</th>
          <th >Mae</th>
          <th class="campo">Alterar</th>
          <th class="campo">Agendar</th>
          <th class="campo">Encaminhar</th>     
        </tr>
      </thead>

      <tbody>
      @foreach ($results as $result)
        <tr>
            <td>{{$result->tel}}</td>
            <td>{{$result->nasc}}</td>
            <td>{{$result->nome}}</td>
            <td>{{$result->mae}}</td>
            <td><button type="button" onclick="alterar('alteracad.php?cod2=<?php echo 'cod' ?>')" class="btn btn-secondary btn-sm">Alterar</button></td>            
            <td><button type="button" onclick="agenda('classificar.php?cod2=<?php echo 'cod'?>')" class="btn btn-primary btn-sm">Agendar</button></td>
            <td><button type="button" onclick="classifica('encaminhar.php?cod2=<?php echo 'cod'?>')" class="btn btn-success btn-sm">Encaminhar</button></td>
        </tr>
        @endforeach
        </tbody>

      </table>
    
  @endsection