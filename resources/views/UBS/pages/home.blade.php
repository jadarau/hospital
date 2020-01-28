@extends('ubs.templates.ubstemplate')

@section('title', 'UBS')

@section('sidebar')
    @parent

    @include('ubs/menus/menuprincipal')
    
@endsection

@section('content')

@include('ubs.conteudo.inicio')
    
@endsection