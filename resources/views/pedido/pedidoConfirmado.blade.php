@extends('plantilla')
@section('titulo', 'Pedido')

@section('contenido')

    <h1 class="text-[1.5rem] font-bold pt-4 pb-0 text-center">Pedido</h1>

    <ul class="m-auto p-4 border space-y-8 w-[500px]">

        @php
            $importeTotal = 0;
        @endphp

        @foreach ($datosPedido as $linea)
            <li>
                <h2 class="text-[1.2rem] font-semibold w-fit">{{ $linea['nombre'] }}</h2>
                <hr>
                <p>Precio: {{ number_format($linea['precio'], 2, '.', ',') }}€</p>
                <p>Cantidad: {{ $linea['cantidad'] }}</p>
                <p><b>Importe: {{ number_format($linea['importe'], 2, '.', ',') }}€</b></p>
            </li>
            @php
                $importeTotal += $linea['importe'];
            @endphp
        @endforeach

    </ul>

    <h3 class="text-center m-4 text-[1.5rem] font-bold">Importe total: {{ number_format($importeTotal, 2, '.', ',') }}€</h3>

@endsection
