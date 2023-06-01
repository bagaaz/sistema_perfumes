<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FaixasEtariasController extends Controller
{
    public function index()
    {
        $faixasEtarias = 'Aqui vai a lista de faixas etárias';

        return response()->json([
            'success' => true,
            'data' => $faixasEtarias
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
