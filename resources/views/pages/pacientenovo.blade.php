@extends('templates.cadastro')

@section('title', 'Cadastro de Paciente')

@section('sidebar')
    
    @include('menus.menurecep')
    
@endsection

@section('content')

@include('elements.novopac')

@endsection