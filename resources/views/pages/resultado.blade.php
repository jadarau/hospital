@extends('templates/master')

@section('title', 'Resultado')

@section('sidebar')
    @parent

    @include('menus/menuclass')
    
@endsection

@section('content')

<table class="table table-hover table-striped table-bordered">

      <thead>
        <tr>
          <th class="campo2">Telefone</th>
          <th class="campo">Nascimento</th>
          <th >Nome</th>
          <th >Mae</th>
          <th class="campo">Hora</th>
          <th class="campo">Agendar</th>
          <th class="campo">Encaminhar</th>     
        </tr>
      </thead>

      <tbody>

      @if($pacientes)
        @foreach($pacientes as $paciente)
        <tr>
            <td>{{$paciente->tel}}</td>
            <td>{{$paciente->nasc}}</td>
            <td>{{$paciente->nome}}</td>
            <td>{{$paciente->mae}}</td>
            <td>12:00</td>            
            <td><button type="button" onclick="agenda('classificar.php?cod2=<?php echo 'cod'?>')" class="btn btn-primary btn-sm">Agendar</button></td>
            <td><button type="button" onclick="classifica('encaminhar.php?cod2=<?php echo 'cod'?>')" class="btn btn-success btn-sm">Encaminhar</button></td>
        </tr>
        @endforeach
      @endif      
        </tbody>

      </table>

@endsection