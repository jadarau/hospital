@extends('ubs.templates.locpacubs')

@section('title', 'Buscar Pacientes')

@section('sidebar')
    @parent

    @include('ubs/menus/menulocpac')
    
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
          <th class="campo">Altetar</th>
          <th class="campo">Apagar</th>     
        </tr>
      </thead>

      <tbody>

      @if($pacientes)
        @foreach($pacientes as $paciente)
        <input type="hidden" name="cod"/>
        <tr>
            <td>{{$paciente->cns}}</td>
            <td>{{$paciente->nasc}}</td>
            <td>{{$paciente->nome}}</td>
            <td>{{$paciente->mae}}</td>
            <td><label>Unidade Modelo</label></td>            
            <td><a href="editarpac/{{$paciente->id}}"><button type="button" class="btn btn-primary btn-sm">Atualizar</button></a></td>
            <td><a id="encaminhar" onclick="janela('encaminhar');return false" href=""><button type="button" class="btn btn-success btn-sm">Encaminhar</button></a></td>
        </tr>
        @endforeach
      @endif      
        </tbody>

      </table>
    
@endsection   