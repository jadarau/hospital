@extends('templates.recepcao')

@section('title', 'Pacientes')

@section('sidebar')
    @parent

    @include('menus/menuclass')
    
@endsection

@section('content')

@include('elements.cadpac')
    
@endsection   