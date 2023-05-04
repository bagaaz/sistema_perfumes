<?php

namespace App\Http\Controllers;

class FamiliasOlfativasNotasControllerTest extends Controller
{
    public function index()
    {
        $familiasOlfativasNotas = 'Aqui vai a lista de familias olfativas relacionado por notas notas';

        return response()->json([
            'success' => true,
            'data' => $familiasOlfativasNotas
        ]);
    }
}
