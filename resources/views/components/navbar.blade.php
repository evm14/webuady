<div class="bg-white shadow-sm sticky-top">

    {{-- HEADER SUPERIOR --}}
    <div class="container-fluid border-bottom">
        <div class="row align-items-center py-2 px-3">

            {{-- LOGO + LEMA --}}
            <div class="col-12 col-md-6 d-flex align-items-center justify-content-center justify-content-md-start">

                <a href="{{ url('/') }}" class="d-flex align-items-center text-decoration-none">
                    <img src="{{ asset('img/logo.png') }}" width="70" alt="Logo UADY">

                    <span class="ms-3 fw-semibold text-primary" style="font-size:16px;">
                        "Luz, Ciencia y Verdad"
                    </span>
                </a>

            </div>

            {{-- ICONOS --}}
            <div class="col-12 col-md-6 d-flex justify-content-center justify-content-md-end align-items-center gap-3 mt-2 mt-md-0">

                <i class="bi bi-search fs-5 nav-icon"></i>
                <i class="bi bi-envelope fs-5 nav-icon"></i>
                <i class="bi bi-calendar fs-5 nav-icon"></i>
                <i class="bi bi-person fs-5 nav-icon"></i>

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