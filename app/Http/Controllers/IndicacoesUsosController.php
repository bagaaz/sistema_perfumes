<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndicacoesUsosController extends Controller
{
    public function index()
    {
        $indicacoesUsos = 'Aqui vai a lista de indicacoesUsos';

        return response()->json([
            'success' => true,
            'data' => $indicacoesUsos
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
