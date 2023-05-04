<?php

namespace App\Http\Controllers;

class PeriodosDiasController extends Controller
{
    public function index()
    {
        $periodosDias = 'Aqui vai a lista de periodosDias';

        return response()->json([
            'success' => true,
            'data' => $periodosDias
        ]);
    }
}
