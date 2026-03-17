<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Secciones UADY</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>

        body{
            background:#f4f4f4;
        }

        .content-box{
            background:white;
            padding:30px;
            border-radius:6px;
            box-shadow:0 5px 15px rgba(0,0,0,0.1);
        }

        .footer{
            background:#0b2d52;
            color:white;
        }

    </style>

</head>

<body>

    {{-- Navbar--}}
    <x-navbar/>

    {{-- Contenido --}}
    <div class="container mt-4">

        <div class="content-box">
            @yield('content')
        </div>

    </div>

    {{-- Footer --}}
    <div class="footer text-center p-4 mt-5">
        Universidad Autónoma de Yucatán © 2026
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>