<?php

namespace App\Http\Controllers;

class FavoritosController extends Controller
{
    public function index()
    {
        $favoritos = 'Aqui vai a lista de favoritos';

        return response()->json([
            'success' => true,
            'data' => $favoritos
        ]);
    }
}
