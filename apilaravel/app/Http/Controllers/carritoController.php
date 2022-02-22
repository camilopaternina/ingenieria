<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Carrito;
use App\Models\carritoProducto;
use App\Models\Producto;

class carritoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $carrito = new Carrito();
        $carrito = Carrito::find($id);
        return carritoProducto::select('*')->where('id_carrito',$carrito->id_carrito)->get();
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
        $carrito = new Carrito();
        $carrito = Carrito::find($id);
        $producto = new Producto();
        $producto = Producto::find($request->producto);
        $precio = $producto->precio * $request->cantidad;

        if($producto->stock <= $request->cantidad):
            $carritopr = new carritoProducto();
            $carritopr->carrito = $request->carrito;
            $carritopr->producto = $request->producto;
            $carritopr->cantidad = $request->cantidad;
            $carritopr->precio = $precio;
            return response()->json([
                'res' => true,
                'msg' => 'producto agregado al carrito'
            ],400);
        else:
            return response()->json([
                'res' => false,
                'msg' => 'la cantidad solicitada supera el stock'
            ],200);
        endif;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $carrito = new Carrito();
        $carrito = Carrito::find($id);

        $carritoP = new carritoProducto();
        $carritoP = carritoProducto::select('*')->where('id_carrito',$carrito->id_carrito)->delete();
        $carritoP->save();
    }
}
