@extends('layouts.main')

@section('content')

{{-- HERO --}}
<div class="text-white py-5"
     style="background: linear-gradient(rgba(11,44,77,0.85), rgba(11,44,77,0.85)), url('/img/aspirantes.jpg'); background-size: cover; background-position: center;">

    <div class="container text-center">
        <h1 class="fw-bold display-4">Aspirantes</h1>
        <p class="lead">Proceso de ingreso a la Facultad de Contaduría</p>
    </div>

</div>

<div class="container py-5">

    <div class="bg-white p-5 rounded shadow-lg">

        {{-- PROCESO --}}
        <h3 class="fw-bold mb-4 text-primary">Proceso de ingreso</h3>

        <div class="row g-4 text-center mb-5">

            <div class="col-md-3">
                <div class="card-pro p-4 border rounded">
                    <h5>1. Registro</h5>
                    <p>Inscríbete en el sistema de ingreso (SIPI).</p>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card-pro p-4 border rounded">
                    <h5>2. Pago</h5>
                    <p>Realiza el pago correspondiente.</p>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card-pro p-4 border rounded">
                    <h5>3. Examen</h5>
                    <p>Presenta el EXANI II.</p>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card-pro p-4 border rounded">
                    <h5>4. Resultados</h5>
                    <p>Consulta tu resultado en línea.</p>
                </div>
            </div>

        </div>

        {{-- REQUISITOS --}}
        <h3 class="fw-bold mb-3 text-primary">Requisitos</h3>

        <ul class="mb-5">
            <li>Acta de nacimiento</li>
            <li>CURP</li>
            <li>Certificado de bachillerato</li>
            <li>Correo electrónico activo</li>
        </ul>

        {{-- EXAMEN --}}
        <h3 class="fw-bold mb-3 text-primary">Examen de ingreso</h3>

        <p class="mb-5">
            El proceso incluye la presentación del examen EXANI II, que evalúa habilidades y conocimientos académicos necesarios para ingresar a la universidad.
        </p>

        {{-- BOTÓN --}}
        <div class="text-center">
            <a href="#" class="btn btn-warning btn-lg px-5 fw-bold shadow">
                Ver convocatoria
            </a>
        </div>

    </div>

</div>

@endsection