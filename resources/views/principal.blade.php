@extends('layouts.app')

@section('content')

{{-- BANNER INSTITUCIONAL --}}

@php

$slides = [

[
    'imagen' => 'img/banner.jpg',
    'titulo' => 'Facultad de Contaduría y Administración',
    'subtitulo' => 'Universidad Autónoma de Yucatán',

    'btn1_activo' => true,
    'btn1_texto' => 'Ver más',
    'btn1_url' => '#',

    'btn2_activo' => false,
    'btn2_texto' => '',
    'btn2_url' => ''
],

[
    'imagen' => 'img/banner2.jpg',
    'titulo' => 'Plan de Desarrollo Institucional',
    'subtitulo' => 'UADY 2026 - 2040',

    'btn1_activo' => false,
    'btn1_texto' => '',
    'btn1_url' => '',

    'btn2_activo' => true,
    'btn2_texto' => 'Más información',
    'btn2_url' => '#'
],

[
    'imagen' => 'img/banner3.jpg',
    'titulo' => 'MODULO DE ATENCION FISCAL',
    'subtitulo' => ' ',

    'btn1_activo' => true,
    'btn1_texto' => 'Mas informacion',
    'btn1_url' => '#',

    'btn2_activo' => false,
    'btn2_texto' => '',
    'btn2_url' => ''
],

];

@endphp

<x-banner :slides="$slides"/>



{{-- NOTICIAS --}}

<section class="mt-5">

    <div class="container">

        <div class="d-flex justify-content-between align-items-center mb-3">
            <h3 class="fw-bold mb-0">Noticias</h3>
        </div>

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

        {{-- PAGINACIÓN --}}
        <div class="d-flex justify-content-center mt-4">
            {{ $noticias->links() }}
        </div>

    </div>

</section>



{{-- AVISOS --}}

<section class="mt-5 mb-5">

    <div class="container">

        <h3 class="fw-bold mb-3">Avisos</h3>

        <x-accordion :avisos="$avisos" />

    </div>

</section>

@endsection