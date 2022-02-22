<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Mensaje;
use App\Notifications\Mensaje as MensajeNotification;

class msgController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
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
        $mensaje = new Mensaje();
        $mensaje->contenido = $request->cont;
        $mensaje->emisor = $request->user()->id;
        $mensaje->receptor = $request->receptor;
        $mensaje->leido = false;

        $mensaje->save();
        auth()->user()->notify(new MensajeNotifications($mensaje));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Mensaje::select('*')
        ->where('receptor', $request->user()->id)
        ->orderBy('created_at');
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
        $mensaje = new Mensaje();
        $mensaje = DB::select('* from tabla_mensaje where id_mensaje = :id', ['id' => $request->user()->id]);
        if($mensaje->emisor = $request->user()->id):
            $mensaje->contenido = $request->contenido;
            $mensaje->save();
            return response()->json([
                'res' => true,
                'msg' => 'Mensaje modificado'
            ],400);
        else:
            return response()->json([
                'res' => false,
                'msg' => 'Se ha producido un error en la actualización del mensaje'
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
        $mensaje = new Mensaje();
        $mensaje = Mensaje::find($id);
        $mensaje->delete();
        $mensaje->save();
    }
}
