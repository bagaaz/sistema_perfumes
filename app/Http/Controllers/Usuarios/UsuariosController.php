<?php

namespace App\Http\Controllers\Usuarios;

use App\Http\Controllers\Controller;

class UsuariosController extends Controller
{
    public function index()
    {
        $usuarios = 'Aqui vai a lista de usuarios';

        return response()->json([
            'success' => true,
            'data' => $usuarios
        ]);
    }
}
