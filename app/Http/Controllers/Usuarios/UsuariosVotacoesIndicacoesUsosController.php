<?php

namespace App\Http\Controllers\Usuarios;

use App\Http\Controllers\Controller;

class UsuariosVotacoesIndicacoesUsosController extends Controller
{
    public function index()
    {
        $usuariosVotacoesIndicacoesUsos = 'Aqui vai a lista de usuariosVotacoesIndicacoesUsos';

        return response()->json([
            'success' => true,
            'data' => $usuariosVotacoesIndicacoesUsos
        ]);
    }
}
