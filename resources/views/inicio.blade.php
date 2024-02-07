@extends('plantilla')
@section('titulo', 'Inicio')

@section('contenido')
    <div class="m-4">

        <h1 class="fs-1 text-white bg-slate-800 p-[1rem]">Página de inicio</h1>

        @if (auth()->check())
            <h2 class="text-[1.2rem] mt-[2rem] pl-[1rem]">
                Bienvenido/a <b><i>{{ auth()->user()->login }}</i></b>
            </h2>
        @endif

        @include('productos.index', $productos)

    </div>

@endsection
