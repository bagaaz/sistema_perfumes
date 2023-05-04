<?php

namespace App\Http\Controllers;

class ProjecoesController extends Controller
{
    public function index()
    {
        $projecoes = 'Aqui vai a lista de projeções';

        return response()->json([
            'success' => true,
            'data' => $projecoes
        ]);
    }
}
