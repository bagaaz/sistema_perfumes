<?php

namespace App\Http\Controllers;

class IndicacoesUsosController extends Controller
{
    public function index()
    {
        $indicacoesUsos = 'Aqui vai a lista de indicacoesUsos';

        return response()->json([
            'success' => true,
            'data' => $indicacoesUsos
        ]);
    }
}
