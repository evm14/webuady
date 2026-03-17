<div class="col-md-4 mb-4">

    <div class="card shadow-sm card-hover h-100">

        {{-- Imagen --}}
        <img
            src="{{ asset('img/' . $img) }}"
            class="card-img-top"
            alt="Imagen de noticia"
        >

        <div class="card-body d-flex flex-column">

            {{-- Título --}}
            <h5 class="card-title fw-semibold">
                {{ $titulo }}
            </h5>

            {{-- Contenido --}}
            <p class="card-text text-muted">
                {{ $slot }}
            </p>

            {{-- Botón --}}
            <div class="mt-auto">
                <x-button>
                    Ver más
                </x-button>
            </div>

        </div>

    </div>

</div>