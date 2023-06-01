<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FamiliasOlfativasNotasController extends Controller
{
    public function index()
    {
        $familiasOlfativasNotas = 'Aqui vai a lista de familias olfativas relacionado por notas notas';

        return response()->json([
            'success' => true,
            'data' => $familiasOlfativasNotas
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
