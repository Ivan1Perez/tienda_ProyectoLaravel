@extends('plantilla')
@section('titulo', 'CRUD Usuarios')

@section('contenido')
    <div class="m-4">
        <h1 class="text-2xl mb-4">Listado de usuarios</h1>
        <ul class="space-y-4">
            @forelse ($users as $user)
                <li class="flex gap-2 items-center">
                    <p><b>{{ $user->login }}</b></p>
                    <a href="{{ route('users.show', $user) }}" class="bg-[#0d6efd] text-white px-1.5 py-0.5 rounded">
                        Ver detalle
                    </a>
                    @if (auth()->check())
                        @if (auth()->user()->rol === 'admin')
                            <form action="{{ route('users.destroy', $user) }}" method="post">
                                @method('DELETE')
                                @csrf
                                <button class="bg-red-600 text-white px-1.5 py-0.5 rounded">Borrar</button>
                            </form>
                        @endif
                    @endif
                </li>
            @empty
                <li>
                    <p>No hay usuarios disponibles</p>
                </li>
            @endforelse

            {{ $users->links() }}
        </ul>
    </div>
@endsection
