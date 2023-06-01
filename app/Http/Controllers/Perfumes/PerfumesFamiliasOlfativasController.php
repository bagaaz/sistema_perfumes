<?php

namespace App\Http\Controllers\Perfumes;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PerfumesFamiliasOlfativasController extends Controller
{
    public function index()
    {
        $perfumesFamiliasOlfativas = 'Aqui vai a lista de perfumes familias olfativas';

        return response()->json([
            'success' => true,
            'data' => $perfumesFamiliasOlfativas
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
