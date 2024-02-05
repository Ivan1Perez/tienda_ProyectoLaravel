<div class="m-4">
    <h1 class="text-2xl mb-4">Listado de productos</h1>
    <ul class="space-y-4">
        {{-- @forelse ($productos as $producto)
            <li class="flex gap-2 items-center">
                <p><b>{{ $producto->nombre }}</b></p>
                <a href="{{ route('productos.show', $producto) }}" class="bg-[#0d6efd] text-white px-1.5 py-0.5 rounded">
                    Ver detalle
                </a>
            </li>
        @empty
            <li>
                <p>No hay productos disponibles</p>
            </li>
        @endforelse --}}

        {{-- {{ $productos->links() }} --}}
    </ul>
</div>