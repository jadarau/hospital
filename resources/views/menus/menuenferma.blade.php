@include('menus/componentes/superior')

@section('title', 'Enfermaria')

@include('menus/componentes/meio')

      @include('elements/openferma')

@include('menus/componentes/meiodois')

@include('elements/buscapac')

@include('menus/componentes/meiotres')

        @yield('content')

@include('menus/componentes/inferior')
        