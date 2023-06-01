<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DuracoesController extends Controller
{
    public function index()
    {
        $duracoes = 'Aqui vai a lista de durações';

        return response()->json([
            'success' => true,
            'data' => $duracoes
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
