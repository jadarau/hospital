@include('menus/componentes/superior')

@section('title', 'Atendimento')

@include('menus/componentes/meio')

      @include('elements/oprecepcao')

@include('menus/componentes/meiodois')

@include('elements/buscapac')

@include('menus/componentes/meiotres')

        @yield('content')

@include('menus/componentes/inferior')
        