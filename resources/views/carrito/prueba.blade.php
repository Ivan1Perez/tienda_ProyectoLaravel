<ul>
    @forelse ($carritos as $carrito)

        <li>
            {{ $carrito['idProducto'] }}
            {{ $carrito['cantidad'] }}
            {{ $carrito['idUser'] }}
        </li>

    @empty

        <li>No hay na niño</li>

    @endforelse
</ul>
{{-- {{var_dump($carritos)}} --}}