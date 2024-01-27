<nav>
    <div class="d-flex align-items-center mb-3">
        <h4 class="ms-3 me-4 text-2xl">Blog</h4>
        <a class="me-2" href="{{ route('inicio') }}">Inicio</a>
        <a class="me-2" href="{{ route('inicio') }}">Mostrar</a>
        @if (auth()->check())
            <a class="me-2" href="{{ route('inicio') }}">Crear</a>
        @endif
        @if (auth()->guest())
            <div>
                <a class="me-2" href="{{ route('login') }}">Log in</a>
            </div>
        @endif
        @if (auth()->check())
            <div>
                <a class="me-2" href="{{ route('logout') }}">Log out</a>
            </div>
        @endif
    </div>
</nav>
