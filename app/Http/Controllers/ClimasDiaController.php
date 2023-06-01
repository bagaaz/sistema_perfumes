<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClimasDiaController extends Controller
{
    public function index()
    {
        $climasDia = 'Aqui vai a lista de climasDia';

        return response()->json([
            'success' => true,
            'data' => $climasDia
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
