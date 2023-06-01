<?php

namespace App\Http\Controllers\Usuarios;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

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
