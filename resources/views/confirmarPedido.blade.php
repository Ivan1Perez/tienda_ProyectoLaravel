@extends('plantilla')
@section('titulo', 'Confirmar Pedido')

@section('contenido')
    <div class="m-4">

        <h1 class="fs-1 text-white text-center m-auto bg-slate-800 p-[1rem] w-[600px]">Datos de pago</h1>

        <form action="{{ route('carrito.pedidoConfirmado', $lineasCarrito) }}" method="post" class="confirmForm">
            <label>Número de Tarjeta:</label>
            <br>
            <input type="text" name="numTarjeta" placeholder="XXXX-XXXX-XXXX-XXXX" required>
            <br>
            <label>Dirección:</label>
            <br>
            <input type="text" name="direccion" placeholder="Nombre del propietario tal y como aparece en la tarjeta"
                required>

            <div class="flex gap-4">
                <button type="submit" class="btnComprar">Comprar</button>
                <a href="{{ route('carrito.show', auth()->user()->id) }}" class="btnCancelar">Cancelar</a>
            </div>
        </form>

    </div>

@endsection
