<div class="w-100 bg-white shadow-sm sticky-top">

    {{-- HEADER SUPERIOR --}}
    <div class="container-fluid">

        <div class="row align-items-center py-2">

            {{-- LOGO + LEMA --}}
            <div class="col-md-6 d-flex align-items-center">

                <a href="{{ route('inicio') }}">
                    <img src="{{ asset('img/logo.png') }}" width="75">
                </a>

                <div class="ms-3 text-primary small">
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


    {{-- MENU DORADO --}}
    <div class="menu-gold py-2 w-100">

        <div class="container-fluid text-center">

            <a href="{{ route('inicio') }}" class="gold-btn mx-4">Inicio</a>
            <a href="{{ route('aspirantes') }}" class="gold-btn mx-4">Aspirantes</a>
            <a href="{{ route('estudiantes') }}" class="gold-btn mx-4">Estudiantes</a>
            <a href="{{ route('docentes') }}" class="gold-btn mx-4">Docentes</a>
            <a href="{{ route('egresados') }}" class="gold-btn mx-4">Egresados</a>

        </div>

    </div>


    {{-- MENU AZUL --}}
    <nav class="navbar navbar-expand-lg navbar-dark menu-blue w-100">

        <div class="container-fluid justify-content-center">

            <button
                class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#menu"
            >
                <span class="navbar-toggler-icon"></span>
            </button>

            <div id="menu" class="collapse navbar-collapse justify-content-center">

                <ul class="navbar-nav">

                    <li class="nav-item dropdown mx-3">
                        <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            Nuestra Facultad
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item">Historia</a></li>
                            <li><a class="dropdown-item">Misión y Visión</a></li>
                            <li><a class="dropdown-item">Autoridades</a></li>
                        </ul>
                    </li>

                    <li class="nav-item dropdown mx-3">
                        <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            Oferta Educativa
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item">Licenciaturas</a></li>
                            <li><a class="dropdown-item">Maestrías</a></li>
                            <li><a class="dropdown-item">Doctorado</a></li>
                        </ul>
                    </li>

                    <li class="nav-item dropdown mx-3">
                        <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            Investigación
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item">Proyectos</a></li>
                            <li><a class="dropdown-item">Publicaciones</a></li>
                        </ul>
                    </li>

                    <li class="nav-item dropdown mx-3">
                        <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            Vinculación
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item">Convenios</a></li>
                            <li><a class="dropdown-item">Prácticas</a></li>
                        </ul>
                    </li>

                </ul>

            </div>

        </div>

    </nav>

</div>