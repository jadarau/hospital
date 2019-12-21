@extends('templates.cadastro')

@section('title', 'Pacientes')

@section('sidebar')
    @parent

    @include('menus/menupac')
    
@endsection

@section('content')

@include('elements.cadpac')
    
@endsection   