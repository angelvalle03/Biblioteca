<?php

namespace App\Http\Controllers;
use App\Models\Usuario;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function index(){
        $usuarios = Usuario::all();
        return response()->json($usuarios);
    }
    public function store(Request $request){
        $usuario = Usuario::create($request->post());
        return response()->json([
            'usuario'=>$usuario
        ]);
    }

    public function update(Request $request, Usuario $usuario){
        
        $usuario->fill($request->post())->save();
        return response()->json([
            'usuario'=>$usuario
        ]);
    }
    public function show(Usuario $usuario){
        return response()->json($usuario);
    }
    
       

    public function destroy(Usuario $usuario){
        $usuario->delete();
        return response()->json([
            'mensaje'=>'Usario eliminado'
        ]);
    }
    
       
}
