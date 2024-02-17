@extends('plantilla')
@section('titulo', 'Pedido')

@section('contenido')

    <h1 class="text-[1.5rem] font-bold pt-4 pb-0 pl-[3rem]">Pedido:</h1>

    {{ var_dump($pedidos) }}
    {{-- <ul class="mx-4 p-4 border">
        @foreach ($pedidos as $pedido)
            <li>
                <p>IdProducto: {{ $pedido->idProducto }}</p>
                <p>Cantidad: {{ $pedido->cantidad }}</p>
            </li>
        @endforeach
    </ul> --}}

@endsection
