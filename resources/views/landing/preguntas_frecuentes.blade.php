@extends('landing.layouts.app')
@section('content')

<section class="container mt-5">
    <div class="grid grid-cols-1">
        @for ($i = 0; $i <= 6; $i++)
            <div>
                <span>Titulo</span>
            </div>
        @endfor

        <div>
            <h2 class="text-center texto-solicita-verde">Preguntas frecuentes</h2>
        </div>
        @for ($i = 0; $i <= 6; $i++)
            <div class="text-justify my-3">
            <p>
                <strong>*</strong>
                ¿Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus?
                ¿Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus?
                ¿Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus?
            </p>
            </div>
        @endfor

    </div>
</section>


@stop


