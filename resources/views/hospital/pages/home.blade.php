@extends('hospital.templates.hospitaltemplate')

@section('title', 'Hospital')

@section('sidebar')
    @parent

    @include('hospital/menus/menuprincipal')
    
@endsection

@section('content')

@include('hospital.conteudo.inicio')
    
@endsection