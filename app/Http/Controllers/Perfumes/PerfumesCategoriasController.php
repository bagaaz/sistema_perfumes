<?php

namespace App\Http\Controllers\Perfumes;

use App\Http\Controllers\Controller;

class PerfumesCategoriasController extends Controller
{
    public function index()
    {
        $perfumesCategorias = 'Aqui vai a lista de perfumes categorias';

        return response()->json([
            'success' => true,
            'data' => $perfumesCategorias
        ]);
    }
}
