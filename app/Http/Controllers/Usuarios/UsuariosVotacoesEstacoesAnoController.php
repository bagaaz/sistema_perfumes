<?php

namespace App\Http\Controllers\Usuarios;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

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
