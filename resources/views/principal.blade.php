@extends('layouts.main')

@section('content')

{{-- BANNER --}}
<x-banner :slides="$banners"/>

{{-- NOTICIAS --}}
<section class="mt-5">
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
        <h3 class="fw-bold mb-3">Avisos</h3>
        <x-accordion :avisos="$avisos"/>
    </div>
</section>

@endsection