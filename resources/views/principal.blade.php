@extends('layouts.main')

@section('content')

{{-- BANNER --}}
<x-banner :slides="$banners"/>

{{-- NOTICIAS --}}
<section class="mt-5 mb-5 py-5 bg-light">
    <div class="container">

        <h3 class="fw-bold mb-3">Noticias</h3>

        <div class="row">

            @forelse ($noticias as $n)

                <x-card
                    :img="$n->imagen->ruta ?? 'img/default.jpg'"
                    :titulo="$n->titulo"
                >
                    {{ \Illuminate\Support\Str::limit($n->contenido,150) }}
                </x-card>

            @empty

                <div class="col-12">
                    <div class="alert alert-info text-center">
                        No hay noticias disponibles
                    </div>
                </div>

            @endforelse

        </div>

        <div class="d-flex justify-content-center mt-4">
            {{ $noticias->links() }}
        </div>

    </div>
</section>

{{-- AVISOS --}}
<section class="mt-5 mb-5">
    <div class="container">

        <div class="row">

            {{-- AVISOS --}}
            <div class="col-lg-8">

             <h3 class="fw-bold mb-4 text-primary border-start border-4 border-primary ps-3">
    Avisos
</h3>

                <div class="accordion shadow-sm rounded" id="accordionAvisos">

                    @forelse($avisos as $aviso)

                        <div class="accordion-item">

                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed fw-semibold"
                                        type="button"
                                        data-bs-toggle="collapse"
                                        data-bs-target="#aviso{{ $aviso->id }}">

                                    {{ $aviso->titulo }}
                                </button>
                            </h2>

                            <div id="aviso{{ $aviso->id }}"
                                 class="accordion-collapse collapse"
                                 data-bs-parent="#accordionAvisos">

                                <div class="accordion-body">
                                    {{ $aviso->contenido }}
                                </div>

                            </div>

                        </div>

                    @empty

                        <div class="alert alert-info text-center">
                            No hay avisos disponibles
                        </div>

                    @endforelse

                </div>

            </div>

           {{--PANEL DERECHO--}}
            <div class="col-lg-4 mt-4 mt-lg-0">

               <div class="p-4 shadow-lg rounded bg-white border-start border-4 border-primary h-100">

                    <h5 class="fw-bold mb-3">Información rápida</h5>

                    <ul class="list-unstyled">

                        <li class="mb-2">📌 Servicios escolares</li>
                        <li class="mb-2">📌 Calendario académico</li>
                        <li class="mb-2">📌 Trámites y formatos</li>
                        <li class="mb-2">📌 Contacto FCA</li>

                    </ul>

                    <hr>

                    <h6 class="fw-bold">Contacto</h6>
                    <p class="mb-1">📧 fca@correo.uady.mx</p>
                    <p class="mb-0">📞 (999) 123 4567</p>

                </div>

            </div>

        </div>

    </div>
</section>

@endsection