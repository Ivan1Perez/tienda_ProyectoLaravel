<?php

namespace App\Http\Controllers;

use App\Models\LineaPedido;
use App\Models\Pedido;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\Producto;
use App\Models\User;

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
        $idProducto = (int)$request->get('idProducto');

        $producto = Producto::findOrFail($idProducto);
        $precio = $producto->precio;

        Http::withToken('1234')->post('http://carrito-api-proyecto-laravel/api/carrito', [
            'idProducto' => $idProducto,
            'nombre' => $request->get('nombre'),
            'precio' => $precio,
            'cantidad' => (int)$request->get('cantidad'),
            'idUser' => auth()->user()->id
        ]);

        return redirect()->route('carrito.show', auth()->user()->id);
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
            $response = Http::withToken('1234')->get('http://carrito-api-proyecto-laravel/api/carrito/' . $idUser);

            $lineasCarrito = json_decode($response->body());
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
        Http::withToken('1234')->put('http://carrito-api-proyecto-laravel/api/carrito/' . $id, [
            'cantidad' => $request->cantidad
        ]);

        $mensaje = "Carrito actualizado con éxito.";

        session()->flash('mensaje_carritoActualizado', $mensaje);

        return redirect()->route('carrito.show', auth()->user()->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Http::withToken('1234')->delete('http://carrito-api-proyecto-laravel/api/carrito/' . $id);

        return redirect()->route('carrito.show', auth()->user()->id);
    }

    public function confirmarPedido(Request $request)
    {

        $lineasCarrito = json_decode($request->input('lineasCarrito'));
        $idUser = $lineasCarrito[0]->idUser;

        if (auth()->user()->id === $idUser) {
            return view('confirmarPedido', compact('lineasCarrito'));
        }

        return redirect()->route('inicio');
    }

    public function pedidoConfirmado(Request $request)
    {

        $lineasCarrito = json_decode($request->lineasCarrito);
        $idUser = $lineasCarrito[0]->idUser;

        if (auth()->user()->id === $idUser) {

            $pedido = new Pedido();
            $pedido->dirEntrega = $request->direccion;
            $pedido->dniUser = auth()->user()->dni;
            $pedido->save();

            $linea = 0;
            foreach ($lineasCarrito as $lineaCarrito) {
                $linea++;
                $lineaPedido = new LineaPedido();
                $lineaPedido->pedido()->associate($pedido);
                $lineaPedido->nlinea = $linea;
                $lineaPedido->idProducto = $lineaCarrito->idProducto;
                $lineaPedido->cantidad = $lineaCarrito->cantidad;
                $lineaPedido->save();

                //Configurar esto para que elimine correctamente la linea del carrito mediante su id.
                $this->destroy($lineaCarrito->id);
            }


            return redirect()->route('pedido.show', $pedido->id);
        }

        return redirect()->route('inicio');
    }
}
