<?php

namespace App\Http\Controllers;

class FabricantesController extends Controller
{
    public function index()
    {
        $fabricantes = 'Aqui vai a lista de fabricantes';

        return response()->json([
            'success' => true,
            'data' => $fabricantes
        ]);
    }
}
