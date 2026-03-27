<div class="bg-white shadow-sm sticky-top">


    {{-- HEADER SUPERIOR --}}

    <div class="container-fluid">

        <div class="row align-items-center py-2">

            {{-- LOGO + LEMA --}}
            <div class="col-md-6 d-flex align-items-center">

                <a href="{{ url('/') }}">
                    <img src="{{ asset('img/logo.png') }}" width="75" alt="Logo UADY">
                </a>

                <div class="ms-3 text-primary" style="font-size:15px;">
                    "Luz, Ciencia y Verdad"
                </div>

            </div>

            {{-- ICONOS --}}
            <div class="col-md-6 text-end">

                <i class="bi bi-search mx-2"></i>
                <i class="bi bi-envelope mx-2"></i>
                <i class="bi bi-calendar mx-2"></i>
                <i class="bi bi-person mx-2"></i>

            </div>

        </div>

    </div>



    {{-- MENÚ PRINCIPAL DINÁMICO (DORADO) --}}

    <div class="menu-gold py-2">

        <div class="container text-center">

            @forelse($menu as $item)

                <a href="{{ url($item->url) }}" class="gold-btn mx-4">
                    {{ $item->nombre }}
                </a>

            @empty

                {{-- Fallback si no hay datos --}}
                <span class="text-white">Menú no disponible</span>

            @endforelse

        </div>

    </div>



    {{-- MENÚ SECUNDARIO (AZUL) --}}

    <nav class="navbar navbar-expand-lg navbar-dark menu-blue">

    <div class="container-fluid justify-content-center">

        <button 
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#menuSecundario">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div id="menuSecundario" class="collapse navbar-collapse justify-content-center">

            <ul class="navbar-nav">

                @foreach($navbar as $item)

                    @if($item->hijos->count() > 0)

                        {{-- PADRE CON DROPDOWN --}}
                        <li class="nav-item dropdown mx-3">

                            <a class="nav-link dropdown-toggle"
                               href="#"
                               data-bs-toggle="dropdown">

                                {{ $item->nombre }}

                            </a>

                            <ul class="dropdown-menu">

                                @foreach($item->hijos as $hijo)

                                    <li>
                                        <a class="dropdown-item" href="{{ url($hijo->url) }}">
                                            {{ $hijo->nombre }}
                                        </a>
                                    </li>

                                @endforeach

                            </ul>

                        </li>

                    @else

                        {{-- PADRE SIN HIJOS --}}
                        <li class="nav-item mx-3">
                            <a class="nav-link" href="{{ url($item->url) }}">
                                {{ $item->nombre }}
                            </a>
                        </li>

                    @endif

                @endforeach

            </ul>

        </div>

    </div>

</nav>

</div>