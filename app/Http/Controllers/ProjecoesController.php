<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjecoesController extends Controller
{
    public function index()
    {
        $projecoes = 'Aqui vai a lista de projeções';

        return response()->json([
            'success' => true,
            'data' => $projecoes
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
