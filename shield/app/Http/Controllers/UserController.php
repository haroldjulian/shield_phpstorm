<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    //
    function registrar(Request $request){

        $usuario = User::where("email","=", $request->email)->get();
        if(count($usuario) >0){
            return response("Email ya existe",400);
        }

        $usuario_creado = User::create([
            "nombres" => $request->nombres,
            "telefono" => $request->telefono,
            "email" => $request->email,
            "dni" => $request->dni,
            "password" => bcrypt($request->password)

        ]);

        //return response()->json($request->nombres);
        return response()-> json([
           "codigo" => 1,
            "usuario_creado" => $usuario_creado
        ]);
    }

    function logear(Request $request){
        if (Auth::attempt(["email"=> $request["usuario"], "password" => $request["clave"]])){
            $usuario = Auth::user();
            return response()->json([
               "usuario" => $usuario
            ]);
        }else {
          return response("Usuario o clave incorrectos",401);
        }
        //return response()->json("logeo exitoso");
    }
}
