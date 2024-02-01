@extends('plantilla')
@section('titulo', 'Detalle usuario')

@section('contenido')

    <div class="mx-4">

        <div class="flex justify-center gap-2">
            <h1 class="text-[2rem] mr-10">
                Usuario con id {{ $user->id }}
            </h1>
            <a href="{{ route('users.edit', $user) }}" type="submit"
                class="block w-fit bg-green-600 text-[1.5rem] text-white px-1.5 py-0.5 rounded">
                Editar
            </a>
            <form action="{{ route('users.destroy', $user) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="bg-red-600 text-[1.5rem] text-white px-1.5 py-0.5 rounded">
                    Borrar
                </button>
            </form>
        </div>

        <div class="text-2xl py-2 m-auto my-5 w-fit">
            <p class="">Login: <u>{{ $user->login }}</u></p>
            <p class="">Rol: '{{ $user->rol }}'</p>
        </div>

        <div class="flex justify-between">
            <p class="text-right">
                <i>Fecha de creación:
                    <b>{{ Carbon\Carbon::parse($user->created_at) }}</b>
                </i>
            </p>
        </div>
        <hr>

    </div>

@endsection
