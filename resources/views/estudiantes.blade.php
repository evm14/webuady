@extends('layouts.main')

@section('content')

{{-- HERO --}}
<div class="text-white py-5"
     style="background: linear-gradient(rgba(11,44,77,0.85), rgba(11,44,77,0.85)), url('/img/estudiantes.jpg'); background-size: cover; background-position: center;">

    <div class="container text-center">
        <h1 class="fw-bold display-4">Estudiantes</h1>
        <p class="lead">Servicios y recursos académicos</p>
    </div>

</div>

<div class="container py-5">

    <div class="bg-white p-5 rounded shadow-lg">

        <div class="row g-4 text-center">

            {{-- BECAS --}}
            <div class="col-md-4">
                <div class="card-pro p-4 border rounded h-100">
                    <h5 class="fw-bold text-primary">Becas</h5>
                    <p>Consulta apoyos económicos disponibles para estudiantes.</p>
                </div>
            </div>

            {{-- TUTORÍAS --}}
            <div class="col-md-4">
                <div class="card-pro p-4 border rounded h-100">
                    <h5 class="fw-bold text-success">Tutorías</h5>
                    <p>Programa de acompañamiento académico.</p>
                </div>
            </div>

            {{-- PADRINO --}}
            <div class="col-md-4">
                <div class="card-pro p-4 border rounded h-100">
                    <h5 class="fw-bold text-warning">Padrino Académico</h5>
                    <p>Apoyo entre estudiantes de diferentes niveles.</p>
                </div>
            </div>

            {{-- INDUCCIÓN --}}
            <div class="col-md-4">
                <div class="card-pro p-4 border rounded h-100">
                    <h5 class="fw-bold text-info">Inducción</h5>
                    <p>Programa de bienvenida a la vida universitaria.</p>
                </div>
            </div>

            {{-- SERVICIO SOCIAL --}}
            <div class="col-md-4">
                <div class="card-pro p-4 border rounded h-100">
                    <h5 class="fw-bold text-danger">Servicio Social</h5>
                    <p>Información para realizar tu servicio social.</p>
                </div>
            </div>

            {{-- PRÁCTICAS --}}
            <div class="col-md-4">
                <div class="card-pro p-4 border rounded h-100">
                    <h5 class="fw-bold text-dark">Prácticas Profesionales</h5>
                    <p>Vinculación con empresas y experiencia laboral.</p>
                </div>
            </div>

        </div>

    </div>

</div>

@endsection 