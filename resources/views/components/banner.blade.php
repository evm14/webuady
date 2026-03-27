<div id="bannerUady" class="carousel slide" data-bs-ride="carousel">

    {{-- INDICADORES --}}
    <div class="carousel-indicators">
        @foreach($slides as $index => $slide)
            <button
                type="button"
                data-bs-target="#bannerUady"
                data-bs-slide-to="{{ $index }}"
                class="{{ $index == 0 ? 'active' : '' }}">
            </button>
        @endforeach
    </div>

    <div class="carousel-inner">

        @foreach($slides as $index => $slide)

            @php
                $tieneImagen = isset($slide->imagen) && $slide->imagen && $slide->imagen->ruta;
            @endphp

            <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">

                <div class="banner-slide">

                    {{-- TEXTO --}}
                    <div class="
                        banner-bg
                        {{ $tieneImagen ? 'w-50' : 'w-100 justify-content-center text-center' }}
                    ">

                        <div class="p-5 text-white w-100">

                            <h1 class="fw-bold display-5">
                                {{ $slide->titulo }}
                            </h1>

                            <h4 class="mb-4">
                                {{ $slide->subtitulo }}
                            </h4>

                            <div class="d-flex gap-3 flex-wrap {{ !$tieneImagen ? 'justify-content-center' : '' }}">

                                @if($slide->btn1_activo)
                                    <a href="{{ $slide->btn1_url }}" class="btn btn-warning px-4">
                                        {{ $slide->btn1_texto }}
                                    </a>
                                @endif

                                @if($slide->btn2_activo)
                                    <a href="{{ $slide->btn2_url }}" class="btn btn-outline-light px-4">
                                        {{ $slide->btn2_texto }}
                                    </a>
                                @endif

                            </div>

                        </div>

                    </div>

                    {{-- IMAGEN --}}
                    @if($tieneImagen)
                        <div class="banner-image w-50"
                             style="background-image:url('{{ asset($slide->imagen->ruta) }}')">
                        </div>
                    @endif

                </div>

            </div>

        @endforeach

    </div>

    {{-- CONTROLES --}}
    <button class="carousel-control-prev" type="button"
        data-bs-target="#bannerUady"
        data-bs-slide="prev">
        <span class="carousel-control-prev-icon"></span>
    </button>

    <button class="carousel-control-next" type="button"
        data-bs-target="#bannerUady"
        data-bs-slide="next">
        <span class="carousel-control-next-icon"></span>
    </button>

</div>