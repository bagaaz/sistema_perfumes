<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AvaliacoesController extends Controller
{
    public function index()
    {
        $avaliacoes = 'Aqui vai a lista de avaliacoes';

        return response()->json([
            'success' => true,
            'data' => $avaliacoes
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
