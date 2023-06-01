<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GrifesController extends Controller
{
    public function index()
    {
        $grifes = 'Aqui vai a lista de grifes';

        return response()->json([
            'success' => true,
            'data' => $grifes
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
