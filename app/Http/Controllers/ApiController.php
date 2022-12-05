<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ApiController extends Controller
{
    public function obtenerusuarios(){

        $response = Http::get('http://127.0.0.1:8000/api/Usuarios/');
        $usuario = $response->json()/*['Usuario']*/;
        return view('usuario', compact('usuario'));
    }

    public function obtenerproductos(){

        $response = Http::get('http://127.0.0.1:8000/api/Productos/');
        $producto = $response->json()/*['Usuario']*/;
        return view('producto', compact('producto'));
    }
}
