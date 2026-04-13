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

    <style>

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

        /* LINKS DORADOS */
        .gold-btn {
            color: white !important;
            text-decoration: none;
            font-weight: 500;
            transition: 0.3s;
        }

        .gold-btn:hover {
            text-decoration: underline;
        }

        /* ICONOS NAVBAR */
        .nav-icon {
            cursor: pointer;
            transition: 0.3s;
        }

        .nav-icon:hover {
            color: #b88a1b;
        }

        /* NAV LINKS */
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
        /* BANNER CORREGIDO */
        .banner-slide {
            min-height: 500px;
        }

        .row.banner-slide {
            height: 500px;
        }

        .banner-bg {
            background: linear-gradient(
                rgba(11,45,82,.96),
                rgba(11,45,82,.96)
            );
            padding: 60px;
        }

        .banner-image {
            height: 100%;
            min-height: 500px;
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }

        .carousel-item {
            height: 500px;
        }

        /* CONTROLES */
        .carousel-control-prev-icon,
        .carousel-control-next-icon {
            background-color: rgba(0,0,0,0.4);
            border-radius: 50%;
            padding: 20px;
        }

        .carousel-indicators button {
            background-color: #fff;
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
            .banner-slide {
                flex-direction: column;
            }

            .banner-image {
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
    margin-bottom: 8px;
    border-radius: 6px;
    overflow: hidden;
}
.accordion-item {
    margin-bottom: 10px;
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