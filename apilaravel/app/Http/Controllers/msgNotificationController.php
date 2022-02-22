<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\notification;
use Illuminate\Http\Request;

class msgNotificationController extends Controller
{
    public function getResource(Request $request){
        $id = $request->user()->id;
        $rsp = DB::select('select * from notifications where notifiable_id = :id', ['id'=> $id]);
        if($rsp):
            return response()->json($rsp);
        else:
            return response()->json([
                'res'=> false,
                'msg'=> 'Error, no tiene permisos para acceder a la información'
            ],200);
        endif;
    }

    public function delete($id){
        notification::find($id)->delete();
    }
}
