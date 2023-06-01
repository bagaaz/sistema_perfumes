<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FabricantesController extends Controller
{
    public function index()
    {
        $fabricantes = 'Aqui vai a lista de fabricantes';

        return response()->json([
            'success' => true,
            'data' => $fabricantes
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
