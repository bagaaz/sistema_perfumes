<?php

namespace App\Http\Controllers;

class AvaliacoesController extends Controller
{
    public function index()
    {
        $avaliacoes = 'Aqui vai a lista de avaliacoes';

        return response()->json([
            'success' => true,
            'data' => $avaliacoes
        ]);
    }
}
