<!DOCTYPE html>
<html lang="es">

<head>

    {{-- META --}}
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {{-- TITLE --}}
    <title>Contaduría UADY</title>

    {{-- BOOTSTRAP --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">

    <style>

        .bi {
            transition: 0.2s;
        }

        .bi:hover {
            color: #b88a1b;
            cursor: pointer;
        }

        .form-control {
            border-radius: 30px;
        }

        .search-bar {
            border-radius: 30px;
            height: 38px;
            font-size: 14px;
            padding: 0 20px;
            border: 1px solid #ccc;
            transition: .2s;
        }

        .search-bar:focus {
            border-color: #0b2d52;
            box-shadow: 0 0 0 2px rgba(11,45,82,.15);
        }

        .icon-box {
            width: 38px;
            height: 38px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            background: #f1f3f5;
            transition: .2s;
            cursor: pointer;
        }

        .icon-box i {
            font-size: 16px;
            color: #0b2d52;
        }

        .icon-box:hover {
            background: #0b2d52;
        }

        .icon-box:hover i {
            color: white;
        }

        /* RESET */
        html, body {
            margin: 0;
            padding: 0;
            overflow-x: hidden;
        }

        /* COLORES */
        .menu-gold {
            background: #b88a1b;
            color: white;
            font-weight: 500;
        }

        .menu-blue {
            background: #0b2d52;
        }

        .menu-blue .nav-link {
            color: white !important;
        }

        /* LINKS */
        .gold-btn {
            color: white !important;
            text-decoration: none;
            font-weight: 500;
            transition: 0.3s;
        }

        .gold-btn:hover {
            text-decoration: underline;
        }

        .nav-link-custom {
            font-weight: 500;
            transition: 0.3s;
        }

        .nav-link-custom:hover {
            color: #b88a1b !important;
        }

        /* DROPDOWN */
        .dropdown-menu {
            border-radius: 0;
            border: none;
        }

        .dropdown-item:hover {
            background: #0b2d52;
            color: white;
        }

        /* BANNER */
       .banner-slide {
    min-height: 400px;
}

@media (max-width: 768px) {
    .banner-slide {
        min-height: auto;
        height: auto;
    }
}

        .banner-bg {
            background: linear-gradient(
                rgba(11,45,82,.96),
                rgba(11,45,82,.96)
            );
            padding: 60px 80px;
        }

        .banner-image {
    min-height: 400px;
    height: auto;
}

        .carousel-item {
    height: auto;
}

        /* INDICADORES */
        .carousel-indicators button {
            background-color: #fff;
        }

        /*CARRUSEL*/

        .carousel-control-prev,
        .carousel-control-next {
            width: 6%;
            opacity: 0;
            transition: all 0.3s ease;
        }

        .carousel:hover .carousel-control-prev,
        .carousel:hover .carousel-control-next {
            opacity: 1;
        }

        .carousel-control-prev {
            left: 10px;
        }

        .carousel-control-next {
            right: 10px;
        }

        .carousel-control-prev-icon,
        .carousel-control-next-icon {
            background-color: rgba(0, 0, 0, 0.4);
            border-radius: 50%;
            padding: 16px;
            backdrop-filter: blur(4px);
            transition: 0.3s;
        }

        .carousel-control-prev-icon:hover,
        .carousel-control-next-icon:hover {
            background-color: rgba(0, 0, 0, 0.7);
            transform: scale(1.1);
        }

        /* CARD */
        .card-hover {
            transition: .3s;
        }

        .card-hover:hover {
            transform: translateY(-6px);
            box-shadow: 0 12px 30px rgba(0,0,0,.15);
        }

        /* FOOTER */
        .footer {
            background: #0b2d52;
            color: white;
        }

        /* RESPONSIVE */
        @media (max-width: 992px) {

    .banner-bg {
        padding: 30px 20px;
        text-align: center;
    }

    .banner-image {
        height: 250px;
    }

    .carousel-control-prev,
    .carousel-control-next {
        display: none;
    }

    .accordion-button {
        font-weight: 600;
        background-color: #f8f9fa;
    }

    .accordion-button:not(.collapsed) {
        background-color: #0b2d52;
        color: white;
    }

    .accordion-item {
        border: none;
        margin-bottom: 10px;
        border-radius: 6px;
        overflow: hidden;
    }
   

.card-pro {
    transition: 0.3s;
    background: #f8f9fa;
}

.card-pro:hover {
    transform: scale(1.05);
    background: white;
    box-shadow: 0px 10px 25px rgba(0,0,0,0.15);
}
/* HERO SECCIONES */
.hero-aspirantes {
    background: linear-gradient(rgba(11,44,77,0.85), rgba(11,44,77,0.85)),
    url("{{ asset('img/aspirantes.jpg') }}");
    background-size: cover;
    background-position: center;
}

.hero-estudiantes {
    background: linear-gradient(rgba(11,44,77,0.85), rgba(11,44,77,0.85)),
    url("{{ asset('img/estudiantes.jpg') }}");
    background-size: cover;
    background-position: center;
}

.hero-docentes {
    background: linear-gradient(rgba(11,44,77,0.85), rgba(11,44,77,0.85)),
    url("{{ asset('img/docentes.jpg') }}");
    background-size: cover;
    background-position: center;
}

.hero-egresados {
    background: linear-gradient(rgba(11,44,77,0.85), rgba(11,44,77,0.85)),
    url("{{ asset('img/egresados.jpg') }}");
    background-size: cover;
    background-position: center;
}

/* CARD PRO (FUERA DEL MEDIA QUERY) */
.card-pro {
    transition: 0.3s;
    background: #f8f9fa;
}

.card-pro:hover {
    transform: scale(1.05);
    background: white;
    box-shadow: 0px 10px 25px rgba(0,0,0,0.15);
}

}
    </style>

</head>

<body class="d-flex flex-column min-vh-100">

    {{-- NAVBAR --}}
    <x-navbar />

    {{-- CONTENIDO --}}
    <main class="flex-fill">
        @yield('content')
    </main>

    {{-- FOOTER --}}
    <x-footer />

    {{-- JS --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>