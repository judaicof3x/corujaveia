@extends('theme.main')

@section('js')
    <script src="{{ URL::asset('plugins/custom/typedjs/typedjs.bundle.js') }}"></script>
    <script>
        var typed = new Typed("#kt_typedjs_example_1", {
            strings: ["Nossos eventos.", "Nossas festas.", "Nossas memórias.", "Coruja Véia!"],
            typeSpeed: 80
        });
    </script>
@endsection

@section('content')
    <div class="card p-5 my-5">
        <div class="mb-15 mt-10 text-center">
            <span id="kt_typedjs_example_1" class="fw-bolder my-5" style="font-size: 42px;"></span>
        </div>
        <div class="row">
            @foreach ($events as $ev)
                <!-- Inicio Evento -->
                <div class="col-lg-4 my-5 my-lg-0">
                    <!--begin::Card-->
                    <div class="card overlay overflow-hidden">
                        <div class="card-body p-0">
                            <div class="overlay-wrapper">
                                <img src="/storage/{{ $ev->event_photo_path }}" alt="" class="w-100 rounded"/>
                            </div>
                            <div class="overlay-layer bg-dark bg-opacity-25">
                                <a href="{{ route('event.show', $ev->slug) }}" class="btn btn-dark btn-shadow col-8">Explorar</a>
                            </div>
                        </div>
                    </div>
                    <!--end::Card-->
                </div>
                <!-- Fim Evento -->
            @endforeach
        </div>
    </div>
@endsection