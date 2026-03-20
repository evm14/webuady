<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Contaduría UADY</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!--<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">-->

    <style>

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

        /* FOOTER */

        .footer {
            background: #0b2d52;
            color: white;
        }

    </style>

</head>

<body>

    {{-- NAVBAR --}}
    <x-navbar />

    {{-- CONTENIDO --}}
    <div class="container mt-4">
        @yield('content')
    </div>

    {{-- FOOTER --}}
    <div class="footer text-center p-4 mt-5">
        Universidad Autónoma de Yucatán © 2026
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>