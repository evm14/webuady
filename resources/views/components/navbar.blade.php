<div class="bg-white shadow-sm sticky-top">

    {{-- HEADER SUPERIOR --}}
    <div class="container-fluid">
        <div class="row align-items-center py-3 border-bottom">

            {{-- LOGO + LEMA --}}
            <div class="col-md-3 d-flex align-items-center">

                <a href="{{ url('/') }}">
                    <img src="{{ asset('img/logo.png') }}" width="75" alt="Logo UADY">
                </a>

                <div class="ms-3 text-primary fw-semibold">
                    "Luz, Ciencia y Verdad"
                </div>

            </div>

            {{-- BUSCADOR --}}
            <div class="col-md-6 d-flex justify-content-center">

                <form action="{{ url('/buscar') }}" method="GET" style="width:100%; max-width:400px;">
                    <input 
                        type="text" 
                        name="q"
                        class="form-control search-bar"
                        placeholder="Buscar..."
                        value="{{ request('q') }}"
                    >
                </form>

            </div>

            {{-- ICONOS --}}
            <div class="col-md-3 text-end d-flex justify-content-end align-items-center gap-2">

                <div class="icon-box"><i class="bi bi-laptop"></i></div>
                <div class="icon-box"><i class="bi bi-envelope"></i></div>
                <div class="icon-box"><i class="bi bi-calendar"></i></div>
                <div class="icon-box"><i class="bi bi-person"></i></div>

            </div>

        </div>
    </div>


    {{-- MENÚ PRINCIPAL (DORADO) --}}
    <div class="menu-gold py-2">
        <div class="container d-flex flex-wrap justify-content-center gap-3">

            @forelse($menu as $item)

                <a href="{{ url($item->url) }}" class="gold-btn">
                    {{ $item->nombre }}
                </a>

            @empty

                <span class="text-white">Menú no disponible</span>

            @endforelse

        </div>
    </div>


    {{-- MENÚ SECUNDARIO (AZUL) --}}
    <nav class="navbar navbar-expand-lg navbar-dark menu-blue py-2">

        <div class="container justify-content-center">

            <button 
                class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#menuSecundario">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div id="menuSecundario" class="collapse navbar-collapse justify-content-center">

                <ul class="navbar-nav align-items-center">

                    @foreach($navbar as $item)

                        @if($item->hijos->count() > 0)

                            <li class="nav-item dropdown mx-lg-3">

                                <a class="nav-link dropdown-toggle nav-link-custom"
                                   href="#"
                                   data-bs-toggle="dropdown">

                                    {{ $item->nombre }}

                                </a>

                                <ul class="dropdown-menu shadow">

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

                            <li class="nav-item mx-lg-3">
                                <a class="nav-link nav-link-custom" href="{{ url($item->url) }}">
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