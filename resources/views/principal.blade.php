@extends('layouts.app')

@section('content')

    {{-- Slider --}}
    <div
        id="slider"
        class="carousel slide mb-4"
        data-bs-ride="carousel"
        data-bs-interval="3000"
    >

        <div class="carousel-inner">

            <div class="carousel-item active">
                <img src="{{ asset('img/banner.jpg') }}" class="w-100">
            </div>

            <div class="carousel-item">
                <img src="{{ asset('img/banner2.jpg') }}" class="w-100">
            </div>

        </div>

    </div>

    {{-- Noticias --}}
    <h3 class="mb-3">Noticias</h3>

    <div class="row">

        @foreach ($noticias as $n)

            <x-card
                :img="$n->imagen"
                :titulo="$n->titulo"
            >
                {{ $n->contenido }}
            </x-card>

        @endforeach

    </div>

    {{ $noticias->links() }}

    {{-- Avisos --}}
    <h3 class="mt-4 mb-3">Avisos</h3>

    <x-accordion :avisos="$avisos" />

@endsection