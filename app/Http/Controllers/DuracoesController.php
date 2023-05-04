<?php

namespace App\Http\Controllers;

class DuracoesController extends Controller
{
    public function index()
    {
        $duracoes = 'Aqui vai a lista de durações';

        return response()->json([
            'success' => true,
            'data' => $duracoes
        ]);
    }
}
