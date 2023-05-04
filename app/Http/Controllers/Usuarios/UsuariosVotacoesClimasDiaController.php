<?php

namespace App\Http\Controllers\Usuarios;

use App\Http\Controllers\Controller;

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
}
