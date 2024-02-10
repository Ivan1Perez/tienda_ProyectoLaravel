<div class="m-4">
    <h1 class="text-2xl font-bold">Listado de productos</h1>

    <ul class="productsContainer">
        @forelse ($productos as $producto)
            <li class="w-full m-auto border rounded p-[1rem] text-center">
                <p class="text-[1.2rem] font-bold mb-[1rem]">{{ $producto->nombre }}</p>
                <img class="w-[100px] m-auto" src="/img/{{ $producto->foto }}" alt={{ $producto->nombre }}>
                <p class="mt-[1rem]"><b>{{ $producto->marca }}</b></p>
                <p class="mb-[1rem]">
                    <b>{{ number_format($producto->precio, 2, '.', ',') }}€</b>
                </p>
                <a href="{{ route('productos.show', $producto) }}" class="bg-[#0d6efd] text-white px-1.5 py-0.5 rounded">
                    Ver detalle
                </a>
            </li>
        @empty
            <li>
                <p>No hay productos disponibles</p>
            </li>
        @endforelse
    </ul>
</div>
