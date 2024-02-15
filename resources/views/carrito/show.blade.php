@extends('plantilla')
@section('titulo', 'Carrito')

@section('contenido')

    @if (session()->has('mensaje_carritoActualizado'))
        <p class="mesnaje_carritoActualizado">{{ session('mensaje_carritoActualizado') }}</p>
    @endif

    <h1 class="text-[1.5rem] font-bold pt-4 pb-0 pl-[3rem]">Carrito: </h1>

    <ul class="mx-4 p-4 border">

        @php
            $importeTotal = 0;
        @endphp

        @forelse ($lineasCarrito as $lineaCarrito)
            <li class="mb-4">

                <form action="{{ route('carrito.destroy', $lineaCarrito->id) }}" method="POST">
                    @csrf
                    @method('DELETE')

                    <button class="button2 bg-red-500 float-right">Borrar</button>
                </form>

                <h2 class="text-[1.2rem] font-semibold w-fit">{{ $lineaCarrito->nombre }}</h2>
                <hr>

                <div class="flex flex-col gap-2 mt-2">
                    <p>Precio: {{ number_format($lineaCarrito->precio, 2, '.', ',') }}€</p>
                    <form action="{{ route('carrito.update', $lineaCarrito->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <label for="cantidad">Cantidad:</label>
                        <div class="flex gap-2">
                            <input type="number" value={{ $lineaCarrito->cantidad }} min="1" max="100"
                                class="form-control w-[5rem]" name="cantidad" id="cantidad">
                            <button class="button1 bg-transparent">
                                Actualizar
                            </button>
                        </div>
                    </form>
                    @php
                        $importeProducto = $lineaCarrito->precio * $lineaCarrito->cantidad
                    @endphp
                    <p><b>Importe: {{ number_format($importeProducto, 2, '.', ',') }}€</b></p>
                </div>

            </li>

            @php
                $importeTotal += $lineaCarrito->precio * $lineaCarrito->cantidad;
            @endphp

        @empty
            <li>El carrito está vacío.</li>
        @endforelse
    </ul>

    @if ($lineasCarrito)
        <p class="text-center m-4 text-[1.5rem] font-bold">Importe total: {{ number_format($importeTotal, 2, '.', ',') }}€</p>
    @endif

    <div class="flex gap-4 justify-center mb-4">
        @if ($lineasCarrito)
            <a href={{ route('pedidoConfirmado', $lineasCarrito[0]->idUser) }} class="button2 bg-slate-500 block">Confirmar pedido</a>
        @endif
        <a href="/" class="button2 bg-[#f3cf2b] block">Seguir comprando</a>
    </div>

@endsection
