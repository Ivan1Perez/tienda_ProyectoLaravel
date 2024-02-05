@extends('plantilla')
@section('titulo', 'Editar usuario')

@section('contenido')
    <h1 class="text-center text-[2rem]">Editar usuario</h1>
    <form action="{{ route('users.update', $user) }}" method="POST" class="w-[500px] m-auto space-y-4">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="login" class="text-[1.5rem]">Login:</label>
            <input type="text" class="form-control text-[1.2rem]" name="login" id="login" value="{{ $user->login }}">
            @if ($errors->has('login'))
                <div class="text-danger">
                    {{ $errors->first('login') }}
                </div>
            @endif
        </div>
        <div class="form-group flex">
            <label for="rol" class="text-[1.5rem] mr-4">Rol:</label>
            <select name="rol" id="rol" class="text-[1.2rem] text-center">
                <option value="admin" {{ $user->rol === 'admin' ? 'selected' : '' }}>admin</option>
                <option value="cliente" {{ $user->rol === 'cliente' ? 'selected' : '' }}>cliente</option>
            </select>
        </div>
        <input type="submit" name="enviar" value="Enviar" class="rounded bg-blue-500 text-white p-2">
    </form>
@endsection
