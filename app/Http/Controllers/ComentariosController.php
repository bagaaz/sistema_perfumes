<?php

namespace App\Http\Controllers;

class ComentariosController extends Controller
{
    public function index()
    {
        $comentarios = 'Aqui vai a lista de comentarios';

        return response()->json([
            'success' => true,
            'data' => $comentarios
        ]);
    }
}
