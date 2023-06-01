<?php

namespace App\Http\Controllers\Perfumes;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PerfumesCategoriasController extends Controller
{
    public function index()
    {
        $perfumesCategorias = 'Aqui vai a lista de perfumes categorias';

        return response()->json([
            'success' => true,
            'data' => $perfumesCategorias
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
