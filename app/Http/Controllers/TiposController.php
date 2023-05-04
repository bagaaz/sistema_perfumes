<?php

namespace App\Http\Controllers;

class TiposController extends Controller
{
    public function index()
    {
        $tipos = 'Aqui vai a lista de tipos';

        return response()->json([
            'success' => true,
            'data' => $tipos
        ]);
    }
}
