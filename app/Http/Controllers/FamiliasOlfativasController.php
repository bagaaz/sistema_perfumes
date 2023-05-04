<?php

namespace App\Http\Controllers;

class FamiliasOlfativasController extends Controller
{
    public function index()
    {
        $familiasOlfativas = 'Aqui vai a lista de familias olfativas';

        return response()->json([
            'success' => true,
            'data' => $familiasOlfativas
        ]);
    }
}
