<?php

namespace App\Http\Controllers;

class FaixasEtariasController extends Controller
{
    public function index()
    {
        $faixasEtarias = 'Aqui vai a lista de faixas etárias';

        return response()->json([
            'success' => true,
            'data' => $faixasEtarias
        ]);
    }
}
