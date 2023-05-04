<?php

namespace App\Http\Controllers;

class CategoriasController extends Controller
{
    public function index()
    {
        $categorias = 'Aqui vai a lista de categorias';

        return response()->json([
            'success' => true,
            'data' => $categorias
        ]);
    }
}
