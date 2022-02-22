<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Carrito;
use App\Http\Requests\AccessController;
use App\Http\Requests\RegistroRequest;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Hash;


class autenticatioController extends Controller
{
 
    public function registre(RegistroRequest $request){
        $user = new User();
        $user = $request::all();
        $user['password'] = bcrypt($request->password);
        User::create($user);
        $carrito = new Carrito();
        $carrito->user = $user->id;
        Carrito::create($carrito);
    }

    public function login(AccessRequest $request){
        $user = User::where('email', $request->email)->first();

        if (! $user || ! Hash::check($request->password, $user->password)) {
            throw ValidationException::withMessages([
                'email' => ['The provided credentials are incorrect.'],
            ]);
        }

        $user->createToken($request->device_name);
    }

    public function logout(Request $request){
        $request->user()->currentAccessToken()->delete();
    }

    public function mydata(Request $request){
        return $request->user();
    }
}
