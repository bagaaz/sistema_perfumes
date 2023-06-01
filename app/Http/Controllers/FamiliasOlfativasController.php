<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FamiliasOlfativasController extends Controller
{
    public function index()
    {
        $familiasOlfativas = 'Aqui vai a lista de familias olfativas';

        return response()->json([
            'success' => true,
            'data' => $familiasOlfativas
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
