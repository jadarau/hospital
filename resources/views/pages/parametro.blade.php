@extends('templates.recepcao')

@section('title', 'Alterar')

@section('sidebar')
    @parent

    @include('menus.menupac')
    
@endsection

@section('content')

<script src="{{ asset('js/jquery-ui-1.7.3.custom.min.js') }}" type="text/javascript"></script>
  <script src="{{ asset('https://code.jquery.com/jquery-1.12.4.min.js') }}"></script>
  <script src="{{ asset('https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js') }}"></script>
  <script src="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js') }}"></script>
  <script src="{{ asset('https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js') }}"></script>
  
     <link rel="stylesheet" href="{{ asset('css/cadastro.css') }}">
     <script src="{{ asset('https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js') }}"></script>
         <link rel="stylesheet" href="{{ asset('https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css') }}">
         <script src="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js') }}"></script>
         <script src="{{ asset('https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js') }}"></script>



@include('elements.editpac')

@endsection