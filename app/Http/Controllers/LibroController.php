<?php

namespace App\Http\Controllers;

use App\Models\Libro;
use Illuminate\Http\Request;


class LibroController extends Controller
{
    public function index(){
        $libros = Libro::all();
        return response()->json($libros);
    }
    public function store(Request $request){
        $libro = Libro::create($request->post());
        return response()->json([
            'libro'=>$libro
        ]);
    }

    public function update(Request $request, Libro $libro){
        
        $libro->fill($request->post())->save();
        return response()->json([
            'libro'=>$libro
        ]);
    }
    public function show(Libro $libro){
        return response()->json($libro);
    }
    
       

    public function destroy(Libro $libro){
        $libro->delete();
        return response()->json([
            'mensaje'=>'Libro eliminado'
        ]);
    }
    
       
}
