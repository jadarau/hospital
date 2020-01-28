@extends('ubs.templates.pacubs')

@section('title', 'Cadastro de Paciente')

@section('sidebar')
    @parent
    
    @include('ubs.menus.menucadpac')
    
@endsection

@section('content')

@include('ubs.conteudo.cadpac2')

@endsection