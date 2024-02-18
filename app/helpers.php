<?php

use Illuminate\Support\Facades\Http;

function mostrarCantidadCarrito()
{
    $response = Http::withToken('1234')->get('http://carrito-api-proyecto-laravel/api/carrito/' . auth()->user()->id);
    $lineasCarrito = json_decode($response->body());
    return count($lineasCarrito);
}
