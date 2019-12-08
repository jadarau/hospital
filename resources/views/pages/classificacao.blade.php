@extends('menus/menuclass')

@section('title', 'Classificaçao')

@section('sidebar')
    
    @section('classificacao')

    
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
      
        <tr>
            <td>(71) 9 8870-3456</td>
            <td>14/07/1983</td>
            <td>Flavio Teixeira Cardoso</td>
            <td>Sonia Bizerra Santos</td>
            <td><button type="button" onclick="alterar('alteracad.php?cod2=<?php echo 'cod' ?>')" class="btn btn-secondary btn-sm">Alterar</button></td>            
            <td><button type="button" onclick="agenda('classificar.php?cod2=<?php echo 'cod'?>')" class="btn btn-primary btn-sm">Agendar</button></td>
            <td><button type="button" onclick="classifica('encaminhar.php?cod2=<?php echo 'cod'?>')" class="btn btn-success btn-sm">Encaminhar</button></td>
        </tr>
        
        </tbody>

      </table>
    
  @endsection