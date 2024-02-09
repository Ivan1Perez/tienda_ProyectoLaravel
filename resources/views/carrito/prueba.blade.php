<ul>
    @forelse ($lineasCarrito as $lineaCarrito)

        <li>
            {{ $lineaCarrito['idProducto'] }}
            {{ $lineaCarrito['cantidad'] }}
            {{ $lineaCarrito['idUser'] }}
        </li>

    @empty

        <li>No hay na niño</li>

    @endforelse
</ul>
{{-- {{var_dump($message)}} --}}