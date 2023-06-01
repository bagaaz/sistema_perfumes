<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ComentariosController extends Controller
{
    public function index()
    {
        $comentarios = 'Aqui vai a lista de comentarios';

        return response()->json([
            'success' => true,
            'data' => $comentarios
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
