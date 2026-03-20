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

        /* RESET GENERAL */

        html,
        body {
            margin: 0;
            padding: 0;
            overflow-x: hidden;
        }



        /* COLORES INSTITUCIONALES */

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



        /* BANNER */

        .banner-slide {
            height: 420px;
        }

        .banner-bg {
            background: linear-gradient(
                rgba(11, 45, 82, .96),
                rgba(11, 45, 82, .96)
            );
        }

        .banner-image {
            background-size: cover;
            background-position: center;
        }


   
        /* CARD HOVER */

        .card-hover {
            transition: .3s;
        }

        .card-hover:hover {
            transform: translateY(-6px);
            box-shadow: 0 12px 30px rgba(0, 0, 0, .15);
        }



        /* FOOTER */

        .footer {
            background: #0b2d52;
            color: white;
        }



        /* RESPONSIVE */

        @media(max-width:992px) {

            .banner-slide {
                height: auto;
                min-height: 320px;
            }

            .banner-image {
                display: none;
            }

        }

    </style>

</head>

<body>

    {{-- NAVBAR FULL --}}
    <div class="w-100">
        <x-navbar />
    </div>


    {{-- CONTENIDO --}}
    <div class="w-100">
        @yield('content')
    </div>


    {{-- FOOTER --}}
    <footer class="footer text-center p-4 mt-5">
        Universidad Autónoma de Yucatán © 2026
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>