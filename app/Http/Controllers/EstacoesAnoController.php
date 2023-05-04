<?php

namespace App\Http\Controllers;

class EstacoesAnoController extends Controller
{
    public function index()
    {
        $estacoesAno = 'Aqui vai a lista de estacoesAno';

        return response()->json([
            'success' => true,
            'data' => $estacoesAno
        ]);
    }
}
