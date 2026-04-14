<div id="bannerUady" class="carousel slide" data-bs-ride="carousel">

    {{-- INDICADORES --}}
    <div class="carousel-indicators">
        @foreach($slides as $index => $slide)
            <button type="button"
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

                <div class="container-fluid p-0">
                  <div class="row g-0 banner-slide align-items-stretch">

                        {{-- TEXTO --}}
                        <div class="col-12 col-lg-6 banner-bg d-flex align-items-center">

                            <div class="text-white" style="max-width: 600px; margin-left: 40px;">

                                <h1 class="fw-bold display-5 mb-3">
                                    {{ $slide->titulo }}
                                </h1>

                                <h5 class="mb-4">
                                    {{ $slide->subtitulo }}
                                </h5>

                                <div class="d-flex gap-3 flex-wrap">

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
    <div class="col-12 col-lg-6 banner-image"s
                                style="background-image:url('{{ asset($slide->imagen->ruta) }}')">
                            </div>
                        @endif

                    </div>
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