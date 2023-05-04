<?php

namespace App\Http\Controllers\Usuarios;

use App\Http\Controllers\Controller;

class UsuariosVotacoesEstacoesAnoController extends Controller
{
    public function index()
    {
        $usuariosVotacoesEstacoesAno = 'Aqui vai a lista de usuariosVotacoesEstacoesAno';

        return response()->json([
            'success' => true,
            'data' => $usuariosVotacoesEstacoesAno
        ]);
    }
}
