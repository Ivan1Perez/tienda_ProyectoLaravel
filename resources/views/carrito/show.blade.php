@extends('plantilla')
@section('titulo', 'Carrito')

@section('contenido')

    <h1 class="text-[1.5rem] font-bold pt-4 pb-0 pl-[3rem]">Carrito: </h1>

    <ul class="mx-4 p-4 border">

        @php
            $carritoVacio = false;
            $importe = 0;
        @endphp

        @forelse ($lineasCarrito as $lineaCarrito)

            <li class="mb-4">

                <button class="button2 bg-red-500 float-right">Borrar</button>
                <h2 class="text-[1.2rem] font-semibold w-fit">{{ $lineaCarrito['nombre'] }}</h2>
                <hr>

                <div class="flex flex-col gap-2 mt-2">
                    <p>Precio: <b>{{ $lineaCarrito['precio'] }}€</b></p>
                    <form action="{{ route('carrito.update', $lineaCarrito['id']) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <label for="cantidad">Cantidad:</label>
                        <div class="flex gap-2">
                            <input type="number" value={{ $lineaCarrito['cantidad'] }} min="1" max="100"
                                class="form-control w-[5rem]" name="cantidad" id="cantidad">
                            <button class="button1 bg-transparent">
                                Actualizar
                            </button>
                        </div>
                    </form>
                </div>

            </li>

            @php
                $importe += $lineaCarrito['precio'] * $lineaCarrito['cantidad']
            @endphp

        @empty
            @php
                $carritoVacio = true;
            @endphp
            <li>El carrito está vacío.</li>
        @endforelse
    </ul>

    @if (!$carritoVacio)
        <p class="text-center m-4 text-[1.5rem] font-bold">Importe total: {{ number_format($importe, 2, '.', ',') }}€</p>
    @endif

    <div class="flex gap-4 justify-center">
        @if (!$carritoVacio)
            <a href="/" class="button2 bg-slate-500 block">Confirmar pedido</a>
        @endif
        <a href="/" class="button2 bg-[#f3cf2b] block">Seguir comprando</a>
    </div>

@endsection
