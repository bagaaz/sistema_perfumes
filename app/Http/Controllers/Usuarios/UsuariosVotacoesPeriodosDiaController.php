<?php

namespace App\Http\Controllers\Usuarios;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UsuariosVotacoesPeriodosDiaController extends Controller
{
    public function index()
    {
        $usuariosVotacoesPeriodosDia = 'Aqui vai a lista de usuariosVotacoesPeriodosDia';

        return response()->json([
            'success' => true,
            'data' => $usuariosVotacoesPeriodosDia
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
