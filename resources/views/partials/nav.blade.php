<nav class="nav">
    <div class="d-flex align-items-center font-bold">
        <h4 class="mx-4 text-2xl">Blog</h4>
        <div class="flex gap-3 items-center text-[1.1rem]">
            <a href="{{ route('productos.index') }}">Inicio</a>
            @if (auth()->check())
                @if (auth()->user()->rol === 'admin')
                    <a href="{{ route('users.index') }}">Administrar usuarios</a>
                @endif
            @endif
            @if (auth()->guest())
                <div>
                    <a href="{{ route('login') }}">Log in</a>
                </div>
            @endif
            @if (auth()->check())
                <div>
                    <a href="{{ route('logout') }}">Log out</a>
                </div>
            @endif
        </div>
    </div>
</nav>
