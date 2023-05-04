<?php

namespace App\Http\Controllers;

class NotasController extends Controller
{
    public function index()
    {
        $notas = 'Aqui vai a lista de notas';

        return response()->json([
            'success' => true,
            'data' => $notas
        ]);
    }
}
