@extends('plantilla')
@section('titulo', 'Inicio')

@section('contenido')
    <div class="m-4">

        <h1 class="fs-1 text-danger bg-slate-800">Página de inicio</h1>

        @if (auth()->check())
            <h2>Bienvenido/a {{ auth()->user()->login }}</h2>
        @endif

    </div>

@endsection
