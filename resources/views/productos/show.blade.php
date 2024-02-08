@extends('plantilla')
@section('titulo', 'Detalle de producto')

@section('contenido')

    <div class="float-left mt-2 mx-4 bg-[#0d6efd] text-white p-2 rounded cursor-pointer">
        <a href={{ route('productos.index') }}>Volver</a>
    </div>

    <div class="mx-4">

        <div class="datos_imagen_Producto">
            <div class="text-center flex flex-col justify-center gap-3">
                <h1 class="text-[2rem] mr-10">
                    {{ $producto->nombre }}
                </h1>

                <div class="text-2xl">
                    <p>Precio: <u>${{ number_format($producto->precio, 2, '.', ',') }}</u></p>
                    <p>Marca: '{{ $producto->marca }}'</p>
                </div>
            </div>

            <div class="w-full bg-white text-center p-[1rem]">
                <img class="w-[200px] m-auto" src="/img/{{ $producto->foto }}" alt={{ $producto->nombre }}>
            </div>
        </div>

        <p class="text-[1.2rem]">{{ $producto->descripcion }}</p>

        <hr>

    </div>

@endsection
