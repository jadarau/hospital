@extends('menus/menupac')

@section('title', 'Paciente')

@section('sidebar')
    
    @section('content')

    

    <table class="table table-hover table-striped table-bordered">

      <thead>
        <tr>
          <th class="campo2">Prontuario</th>
          <th class="campo2">Telefone</th>
          <th class="campo">nascimento</th>
          <th >Nome</th>
          <th >Mae</th>
          <th class="campo">Alterar</th>          
          <th class="campo">Excluir</th>     
        </tr>
      </thead>

      <tbody>

        <tr>
            <td><?php echo "1" ?></td>
            <td><?php echo "(71) 9 99872271" ?></td>
            <td><?php echo "16/08/1983" ?></td>
            <td><?php echo "Jadson Feitas de Araujo" ?></td>
            <td><?php echo "Janete Freitas de Araujo" ?></td>
            <td><button type="button" onclick="alterar('alteracad.php?cod2=<?php echo 'cod' ?>')" class="btn btn-secondary btn-sm">Alterar</button></td>                        
            <td><button type="button" onclick="classifica('encaminhar.php?cod2=<?php echo 'cod'?>')" class="btn btn-success btn-sm">Excluir</button></td>
        </tr>

        </tbody>

      </table>
    
  @endsection