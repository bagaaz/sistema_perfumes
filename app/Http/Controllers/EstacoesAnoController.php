<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EstacoesAnoController extends Controller
{
    public function index()
    {
        $estacoesAno = 'Aqui vai a lista de estacoesAno';

        return response()->json([
            'success' => true,
            'data' => $estacoesAno
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
