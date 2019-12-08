@include('menus/componentes/superior')

@section('title', 'Home')

@include('menus/componentes/meio')

      @include('elements/opinicio')

@include('menus/componentes/meiodois')

@include('elements/buscapac')

@include('menus/componentes/meiotres')

        @yield('content')

@include('menus/componentes/inferior')
        