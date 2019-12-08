@include('menus/componentes/superior')

@section('title', 'Classificaçao')

@include('menus/componentes/meio')

      @include('elements/opclassifica')

@include('menus/componentes/meiodois')

      @include('elements/buscapac')

      
@include('menus/componentes/meiotres')

        @yield('classificacao-view')

@include('menus/componentes/inferior')
        