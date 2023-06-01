<?php

namespace App\Http\Controllers\Perfumes;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PerfumesTiposController extends Controller
{
    public function index()
    {
        $perfumesTipos = 'Aqui vai a lista de perfumes tipos';

        return response()->json([
            'success' => true,
            'data' => $perfumesTipos
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
