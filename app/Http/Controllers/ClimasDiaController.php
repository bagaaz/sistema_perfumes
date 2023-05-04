<?php

namespace App\Http\Controllers;

class ClimasDiaController extends Controller
{
    public function index()
    {
        $climasDia = 'Aqui vai a lista de climasDia';

        return response()->json([
            'success' => true,
            'data' => $climasDia
        ]);
    }
}
