<?php

namespace App\Http\Controllers\Perfumes;

use App\Http\Controllers\Controller;

class PerfumesNotasController extends Controller
{
    public function index()
    {
        $perfumesNotas = 'Aqui vai a lista de perfumes notas';

        return response()->json([
            'success' => true,
            'data' => $perfumesNotas
        ]);
    }
}
