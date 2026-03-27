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

        .gold-btn {
            color: white !important;
            text-decoration: none;
        }

        .menu-blue {
            background: #0b2d52;
        }

        .menu-blue .nav-link {
            color: white !important;
        }

        /* DROPDOWN */
        .dropdown-menu {
            border-radius: 0;
        }

        .dropdown-item:hover {
            background: #0b2d52;
            color: white;
        }

        /* ========================= */
        /* BANNER (SOLUCIÓN FINAL) */
        /* ========================= */

        .banner-slide {
            width: 100%;
            height: 420px;
            display: flex;
        }

        .banner-bg {
            background: linear-gradient(
                rgba(11,45,82,.96),
                rgba(11,45,82,.96)
            );
            height: 100%;
            display: flex;
            align-items: center;
        }

        .banner-image {
            height: 100%;
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
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
        @media(max-width:992px){
            .banner-slide{
                flex-direction: column;
                height: auto;
            }

            .banner-image{
                display:none;
            }
        }

    </style>

</head>

<body>

    {{-- NAVBAR --}}
    <x-navbar />

    {{-- CONTENIDO --}}
    <main>
        @yield('content')
    </main>

    {{-- FOOTER --}}
    <x-footer />

    {{-- JS --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>