<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Requests\AcessController;
use App\Http\Requests\RegistroRequest;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Hash;

class AtenticacionController extends Controller
{
    public function registro(RegistroRequest $request){
        $usuario = new User();
        $usuario->name = $request->name;
        $usuario->Apellido = $request->Apellido;
        $usuario->email = $request->email;
        $usuario->Telefono = $request->Telefono;
        $usuario->password = bcrypt($request->password);
        $usuario->Edad = $request->Edad;

        $usuario->save();

        return response()->json([
            'res' => true, 
            'msg' => 'Registro Exitoso'
        ], 200);
    }

    public function login(AcessController $request){
        $user = User::where('email', $request->email)->first();

    if (! $user || ! Hash::check($request->password, $user->password)) {
        throw ValidationException::withMessages([
            'res' => false,
            'msg' => ['El usuario o la contraseña son incorrectas.'],
        ]);
    }

    $token = $user->createToken($request->email)->plainTextToken;
    return response()->json([
        'res' => true,
        'token' => $token
    ], 200);
    }

    public function logout(Request $request){
        $request->user()->currentAccessToken()->delete();
        return response()->json([
            'res' => 'true',
            'msg' => 'Token eliminado'
        ],200);
    }

    public function datos(Request $request){
        return $request->user();
    }

    public function getUsuername($id){
        $user = User::findOrFail($id);

        if($user):
            return $user->name;
        else:
            return response()->json([
                'res' => 'true',
                'msg' => 'NO existe el usuario'
            ]) ;
        endif;
    }
}
