<div
    id="bannerUady"
    class="carousel slide"
    data-bs-ride="carousel"
    data-bs-interval="5000"
>

    <div class="carousel-inner">

        @foreach($slides as $index => $slide)

            @php
                $tieneImagen = !empty($slide['imagen']);
            @endphp

            <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">

                <div class="banner-slide">

                    <div class="container-fluid h-100">

                        <div class="row h-100">

                           
                            {{-- COLUMNA TEXTO --}}
                       
                            <div class="
                                {{ $tieneImagen ? 'col-lg-6 col-12' : 'col-12' }}
                                d-flex align-items-center
                                banner-bg
                                {{ !$tieneImagen ? 'justify-content-center text-center' : '' }}
                            ">

                                <div class="p-5 text-white">

                                    <h1 class="fw-bold display-5">
                                        {{ $slide['titulo'] }}
                                    </h1>

                                    <h4 class="mb-4">
                                        {{ $slide['subtitulo'] }}
                                    </h4>

                                    <div class="d-flex gap-3 flex-wrap {{ !$tieneImagen ? 'justify-content-center' : '' }}">

                                        @if(!empty($slide['btn1_activo']))
                                            <a href="{{ $slide['btn1_url'] }}"
                                               class="btn btn-warning fw-semibold px-4">
                                                {{ $slide['btn1_texto'] }}
                                            </a>
                                        @endif

                                        @if(!empty($slide['btn2_activo']))
                                            <a href="{{ $slide['btn2_url'] }}"
                                               class="btn btn-outline-light fw-semibold px-4">
                                                {{ $slide['btn2_texto'] }}
                                            </a>
                                        @endif

                                    </div>

                                </div>

                            </div>

                         
                            {{-- COLUMNA IMAGEN --}}
                            
                            @if($tieneImagen)

                                <div
                                    class="col-lg-6 d-none d-lg-block banner-image"
                                    style="background-image:url('{{ asset($slide['imagen']) }}')"
                                ></div>

                            @endif

                        </div>

                    </div>

                </div>

            </div>

        @endforeach

    </div>

    {{-- CONTROLES --}}
    <button class="carousel-control-prev" data-bs-target="#bannerUady" data-bs-slide="prev">
        <span class="carousel-control-prev-icon"></span>
    </button>

    <button class="carousel-control-next" data-bs-target="#bannerUady" data-bs-slide="next">
        <span class="carousel-control-next-icon"></span>
    </button>

</div>