<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class CarritoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $response = Http::withToken('1234')->post('http://carritoapi_proyectolaravel/api/carrito', [
            'idProducto' => (int)$request->get('idProducto'),
            'nombre' => $request->get('nombre'),
            'precio' => (int)$request->get('precio'),
            'cantidad' => (int)$request->get('cantidad'),
            'idUser' => auth()->user()->id
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show($idUserString)
    {

        $idUser = (int)$idUserString;

        if (auth()->user()->id === $idUser) {
            $response = Http::withToken('1234')->get('http://carritoapi_proyectolaravel/api/carrito/' . $idUser);

            $lineasCarrito = json_decode($response->body(), true);
            return view('carrito.show', compact('lineasCarrito'));
        }

        return redirect()->route('login');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
