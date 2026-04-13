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

    </style>

</head>

<body>

    {{-- NAVBAR --}}
    <x-navbar />

    {{-- CONTENIDO --}}
    <main class="container mt-4">

        <div class="content-box">
            @yield('content')
        </div>

    </main>

    {{-- FOOTER COMPONENTE --}}
    <x-footer />

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>