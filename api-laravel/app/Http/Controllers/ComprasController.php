<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Compra;
use Illuminate\Support\Facades\DB;

class ComprasController extends Controller
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
        $compra = new Compra();

        $compra->id = $request->id;
        $compra->Id_producto = $request->Id_producto;
        $compra->Id_pedido = $request->Id_pedido;

        $compra->save();
        return response()-> json([
            'res' => true,
            'msg' =>'Compra realizada correctamente'
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
        //
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

    public function getComprasUsuario($id){
        $compras = DB::select('select * from Compra where Id = :id', ['id' => $id]);
        if($compras):
            return $compras;
        else:
            return response()->json([
                'res'=>false,
                'msg'=>'El usuario no ha realizado ninguna compra'
            ]);
        endif;
    }

    public function getCompra($idUsuario, $idPedido, $idProducto){
        $compra = DB::select('select * from Compra where Id = :idU, Id_pedido = :idp, Id_producto = :idpr', ['idU' => $idUsuario, 'idp' => $idPedido, 'idpr' => $idProducto]);
        if($compra):
            return $compra;
        else:
            return response()->json([
                'res'=>false,
                'msg'=>'No se ha encontrado esta compra en la base de datos'
            ]);
        endif;
    }
}
