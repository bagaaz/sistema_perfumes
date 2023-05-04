<?php

namespace App\Http\Controllers;

class SexosController extends Controller
{
    public function index()
    {
        $sexos = 'Aqui vai a lista de sexos';

        return response()->json([
            'success' => true,
            'data' => $sexos
        ]);
    }
}
