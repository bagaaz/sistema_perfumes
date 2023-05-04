<?php

namespace App\Http\Controllers;

class GrifesController extends Controller
{
    public function index()
    {
        $grifes = 'Aqui vai a lista de grifes';

        return response()->json([
            'success' => true,
            'data' => $grifes
        ]);
    }
}
