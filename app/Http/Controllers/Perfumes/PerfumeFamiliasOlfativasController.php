<?php

namespace App\Http\Controllers\Perfumes;

use App\Http\Controllers\Controller;

class PerfumesFamiliasOlfativasController extends Controller
{
    public function index()
    {
        $perfumesFamiliasOlfativas = 'Aqui vai a lista de perfumes familias olfativas';

        return response()->json([
            'success' => true,
            'data' => $perfumesFamiliasOlfativas
        ]);
    }
}
