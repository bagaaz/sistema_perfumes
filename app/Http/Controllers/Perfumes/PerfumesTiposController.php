<?php

namespace App\Http\Controllers\Perfumes;

use App\Http\Controllers\Controller;

class PerfumesTiposController extends Controller
{
    public function index()
    {
        $perfumesTipos = 'Aqui vai a lista de perfumes tipos';

        return response()->json([
            'success' => true,
            'data' => $perfumesTipos
        ]);
    }
}
