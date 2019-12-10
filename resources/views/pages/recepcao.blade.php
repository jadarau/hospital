@extends('templates.master')

@section('title', 'Classificaçao')

@section('sidebar')
    @parent

    @include('menus/menurecep')
    
@endsection

@section('content')

  <script src="js/jquery-ui-1.7.3.custom.min.js" type="text/javascript"></script>
  <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>


<form id="form" action="parametro" method="GET">

@csrf

<table class="table table-hover table-striped table-bordered">

      <thead>
        <tr>
          <th class="campo2">Telefone</th>
          <th class="campo">nascimento</th>
          <th >Nome(1)</th>
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
        <input type="hidden" name="cod"/>
        <tr>
            <td>{{$paciente->tel}}</td>
            <td>{{$paciente->nasc}}</td>
            <td>{{$paciente->nome}}</td>
            <td>{{$paciente->mae}}</td>
            <td><button type="submit" id="altera" class="btn btn-secondary btn-sm">Alterar1</button></td>            
            <td><button type="button" id="imprimir" class="btn btn-primary btn-sm">Imprimir</button></td>
            <td><a href="direciona/{{$paciente->id}}">Ecaminhar</a></td>
        </tr>
        @endforeach
      @endif      
       
      </tbody>

</table>

</form>
    
@endsection   