@extends('landing.layouts.mail')
@section('title', 'Nuevo manseje de contacto')

@section('content')

    <div>
        Nuevo mensaje de correo
    </div>

    <div>
        <span>Correo electronico:
            <a href="mailto:{{ $data['email'] }}">
                <strong>
                    {{ $data['email'] }}
                </strong>
            </a>
        </span>
    </div>

    <div>
        <span>Comentario:

                <strong>
                    {{ $data['comment'] }}
                </strong>

        </span>
    </div>

@stop
