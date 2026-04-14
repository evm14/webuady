@extends('layouts.main')

@section('content')

<div class="text-white py-5"
     style="background: linear-gradient(rgba(11,44,77,0.85), rgba(11,44,77,0.85)), url('/img/docentes.jpg'); background-size: cover; background-position: center;">

    <div class="container text-center">
        <h1 class="fw-bold display-4">Docentes</h1>
        <p class="lead">Nuestro personal académico</p>
    </div>

</div>

<div class="container py-5">
    <div class="bg-white p-5 rounded shadow-lg">

        <div class="row g-4">

            {{-- DOCENTE 1 --}}
            <div class="col-md-4">
                <div class="card-pro p-4 border rounded text-center h-100">
                    <img src="/img/docente1.jpg" class="rounded-circle mb-3" width="100" height="100">
                    <h5 class="fw-bold">Juan Pérez López</h5>
                    <p class="text-muted">Contaduría</p>
                    <p>juan.perez@uady.mx</p>
                </div>
            </div>

            {{-- DOCENTE 2 --}}
            <div class="col-md-4">
                <div class="card-pro p-4 border rounded text-center h-100">
                    <img src="/img/docente2.jpg" class="rounded-circle mb-3" width="100" height="100">
                    <h5 class="fw-bold">María Gómez Ruiz</h5>
                    <p class="text-muted">Administración</p>
                    <p>maria.gomez@uady.mx</p>
                </div>
            </div>

            {{-- DOCENTE 3 --}}
            <div class="col-md-4">
                <div class="card-pro p-4 border rounded text-center h-100">
                    <img src="/img/docente3.jpg" class="rounded-circle mb-3" width="100" height="100">
                    <h5 class="fw-bold">Carlos Martínez</h5>
                    <p class="text-muted">Finanzas</p>
                    <p>carlos.martinez@uady.mx</p>
                </div>
            </div>

        </div>

    </div>
</div>

@endsection