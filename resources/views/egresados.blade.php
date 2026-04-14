@extends('layouts.main')

@section('content')

<div class="text-white py-5"
     style="background: linear-gradient(rgba(11,44,77,0.85), rgba(11,44,77,0.85)), url('/img/egresados.jpg'); background-size: cover; background-position: center;">

    <div class="container text-center">
        <h1 class="fw-bold display-4">Egresados</h1>
        <p class="lead">Vinculación y desarrollo profesional</p>
    </div>

</div>

<div class="container py-5">

    <div class="bg-white p-5 rounded shadow-lg">

        <div class="row g-4 text-center">

            @foreach($egresados as $item)
                <div class="col-md-3">
                    <div class="card-pro p-4 border rounded h-100">

                        {{-- COLOR DINÁMICO --}}
                        <h5 class="fw-bold 
                            @if($loop->index == 0) text-primary
                            @elseif($loop->index == 1) text-success
                            @elseif($loop->index == 2) text-warning
                            @else text-danger
                            @endif">
                            {{ $item->titulo }}
                        </h5>
                        <p>
                            {{ $item->descripcion }}
                        </p>

                    </div>
                </div>
            @endforeach

        </div>

        {{-- INFO--}}
        <div class="mt-5">
            <h4 class="fw-bold text-primary">Coordinación de egresados</h4>
            <p>
                Esta área se encarga de mantener el vínculo entre la universidad y sus egresados,
                ofreciendo programas académicos, oportunidades profesionales y actividades de desarrollo continuo.
            </p>
        </div>

    </div>

</div>

{{-- ESTILO PRO --}}
<style>
.card-pro {
    transition: 0.3s;
    background: #f8f9fa;
    cursor: pointer;
}

.card-pro:hover {
    transform: scale(1.05);
    background: white;
    box-shadow: 0px 10px 25px rgba(0,0,0,0.15);
}
</style>

@endsection