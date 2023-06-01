<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PeriodosDiasController extends Controller
{
    public function index()
    {
        $periodosDias = 'Aqui vai a lista de periodosDias';

        return response()->json([
            'success' => true,
            'data' => $periodosDias
        ]);
    }

    public function show(int $id)
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function update(Request $request, int $id)
    {
        //
    }

    public function destroy(int $id)
    {
        //
    }
}
