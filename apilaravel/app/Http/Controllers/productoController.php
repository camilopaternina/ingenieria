<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;

class productoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productos = Producto::select('*')->where('visible',true)->get();
        return $productos;
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
        $product = $request::all();
        $product['user_id'] = $request->user()->id;
        $product['vendidos'] = 0;
        Producto::create($product);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Producto::select('*')->whereid($id)>get();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id, Request $request)
    {

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
        $product = Producto::find($id);
        if($request->user()->id == $product->user_id):
            $product->nombre_producto = $request->nombre_producto;
            $product->descripcion_producto = $request->descripcion_producto;
            $product->precio = $request->precio;
            $product->categoria = $request->categoria;
            $product->visible = $request->visible;
            $product->stock = $request->stock;
            $product->save();
        else:
            return response()->json([
                'res' => false,
                'msg' => 'No tiene permiso para modificar esta informacion'
            ],200);
        endif;
    }
 
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,$id)
    {
        $product = Producto::find($id);
        if($request->user()->id == $product->user_id):
            $product->delete();
        else:
            return response()->json([
                'res' => false,
                'msg' => 'No tiene permiso para modificar esta informacion'
            ]);
        endif;
    }
}
