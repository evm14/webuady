<div class="accordion" id="avisos">

    @foreach ($avisos as $i => $a)

        <div class="accordion-item">

            <h2 class="accordion-header">

                <button
                    class="accordion-button collapsed"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#item{{ $i }}"
                >
                    {{ $a->titulo }}
                </button>

            </h2>

            <div
                id="item{{ $i }}"
                class="accordion-collapse collapse"
                data-bs-parent="#avisos"
            >

                <div class="accordion-body">
                    {{ $a->contenido }}
                </div>

            </div>

        </div>

    @endforeach

</div>