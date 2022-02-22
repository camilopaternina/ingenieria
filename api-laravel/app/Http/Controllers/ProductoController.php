<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Producto;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productos = Producto::all();
        return $productos;
    }

    public function getProductosCategoria($categoria){
        $productos =  DB::select('select * from Producto where Id_categoria = :id', ['id' => $categoria]);
       
        if($productos):
            return $productos;
        else:
            return response()->json([
                'res'=> false,
                'msg'=> 'Producto no encontrado'
            ]);
        endif;
    }

    public function getProductosNombre($Nombre){
        $productos =  DB::select('select * from Producto where Nombrep = :nombre', ['nombre' => $Nombre]);
       
        if($productos):
            return $productos;
        else:
            return response()->json([
                'res'=> false,
                'msg'=> 'Producto no encontrado'
            ]);
        endif;
    }

    public function seleccionProducto($id){
        $producto =  DB::select('select * from Producto where Id_producto = :id', ['id' => $id]);
       
        if($producto):
            return response()->json($producto);
        else:
            return response()->json([
                'res'=> false,
                'msg'=> 'Producto no encontrado'
            ]);
        endif;
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
        $producto = new Producto();


        $producto->Id_proveedor = $request->Id_proveedor;
        $producto->Nombrep = $request->Nombrep;
        $producto->Descripcion = $request->Descripcion;
        $producto->PrecioVenta = $request->PrecioVenta;
        $producto->PrecioCompra = $request->PrecioCompra;
        $producto->Cantidad = $request->Cantidad;
        $producto->Id_categoria = $request->Id_categoria;

        $producto->save();

        return response()-> json([
            'res' => true,
            'msg' =>'Producto añadido correctamente'
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
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
    public function update(Request $request, $Id_producto)
    {
        $producto = Producto::findOrFail($request->Id_producto);
        $producto->Cantidad = $request->Cantidad;
        $producto->save();
        return $producto;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($Id_producto)
    {
        $producto = Productos::destroy($request->Id_producto);
        return $producto;
    }
}
