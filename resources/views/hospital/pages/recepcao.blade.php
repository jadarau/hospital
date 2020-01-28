@extends('hospital.templates.hospitaltemplate')

@section('title', 'Classificaçao')

@section('sidebar')
    @parent

    @include('hospital/menus/menurecep')
    
@endsection

@section('content')

  <script src="js/jquery-ui-1.7.3.custom.min.js" type="text/javascript"></script>
  <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

  <script>

function janela(url){
  window.open(url,"altcad","toolbar=false, scrollbars=true,resizable=false,top=120,width=650,height=430,left=515,right=335")
}   

</script>


<form id="form">

@csrf

<table class="table table-hover table-striped table-bordered">

      <thead>
        <tr>
          <th class="campo2">N° SUS</th>
          <th class="campo">nascimento</th>
          <th >Nome</th>
          <th >Mae</th>
          <th class="campo">Referência</th>
          <th class="campo">Alterar</th>
          <th class="campo">Admitir</th>     
        </tr>
      </thead>

      <tbody>
      <!--Inserir resultado da busca -->
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

</form>
    
@endsection   