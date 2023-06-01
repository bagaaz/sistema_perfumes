<?php

namespace App\Http\Controllers\Usuarios;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UsuariosVotacoesClimasDiaController extends Controller
{
    public function index()
    {
        $usuariosVotacoesClimasDia = 'Aqui vai a lista de usuariosVotacoesClimasDia';

        return response()->json([
            'success' => true,
            'data' => $usuariosVotacoesClimasDia
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
