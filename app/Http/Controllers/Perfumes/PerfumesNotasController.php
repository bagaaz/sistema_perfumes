<?php

namespace App\Http\Controllers\Perfumes;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PerfumesNotasController extends Controller
{
    public function index()
    {
        $perfumesNotas = 'Aqui vai a lista de perfumes notas';

        return response()->json([
            'success' => true,
            'data' => $perfumesNotas
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
