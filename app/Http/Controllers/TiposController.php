<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TiposController extends Controller
{
    public function index()
    {
        $tipos = 'Aqui vai a lista de tipos';

        return response()->json([
            'success' => true,
            'data' => $tipos
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
