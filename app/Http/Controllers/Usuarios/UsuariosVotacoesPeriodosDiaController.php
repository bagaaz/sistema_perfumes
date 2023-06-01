<?php

namespace App\Http\Controllers\Usuarios;

use App\Http\Controllers\Controller;

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
}
