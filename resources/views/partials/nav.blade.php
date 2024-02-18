<nav class="nav flex justify-between px-4">
    <a href="{{ route('productos.index') }}" class="mr-8 text-2xl">Memento | Pro Watches</a>
    <div class="flex gap-4 items-center font-bold">
        <div class="flex gap-3 items-center text-[1.1rem]">
            <a href="{{ route('productos.index') }}">Inicio</a>
            @if (auth()->check())
                @if (auth()->user()->rol === 'admin')
                    <a href="{{ route('users.index') }}">Administrar usuarios</a>
                @endif
            @endif
            @if (auth()->guest())
                <a href="{{ route('login') }}">Log in</a>
            @endif
            @if (auth()->check())
                <a href="{{ route('logout') }}">Log out</a>
            @endif
        </div>
        @if (auth()->check())
            <a href="{{ route('carrito.show', auth()->user()->id) }}" class="carritoIconContainer">
                <img class="w-[25px]" src="/img/shopping-cart.png" alt="carrito">
                <span class="bg-blue-500 text-white rounded-full absolute px-[0.5rem] py-[0.2rem] right-4">{{ mostrarCantidadCarrito() }}</span>
            </a>
        @endif
    </div>
</nav>
