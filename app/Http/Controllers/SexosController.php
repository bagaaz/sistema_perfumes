<?php

namespace App\Http\Controllers;

use App\Models\Sexo;
use Illuminate\Http\Request;

class SexosController extends Controller
{
    public function index()
    {
        $sexos = Sexo::select('id', 'nome')->get();

        return response()->json([
            'message' => 'success',
            'data' => $sexos,
        ], 200);
    }

    public function show($id)
    {
        $sexo = Sexo::select('id', 'nome')->find($id);

        if (!$sexo) {
            return response()->json([
                'message' => 'Record not found',
                'data' => []
            ], 404);
        }

        return response()->json([
            'message' => 'success',
            'data' => $sexo,
        ], 200);
    }

    public function store(Request $request)
    {
        try {
            $sexo = new Sexo();
            $sexo->nome = $request->name;
            $sexo->save();

            return response()->json([
                'message' => 'success',
                'data' => $sexo,
            ], 201);
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'Error when saving',
                'error' => $e->getMessage(),
                'data' => []
            ], 500);
        }
    }

    public function update(Request $request, int $id)
    {
        try {
            $sexo = Sexo::find($id);

            if (!$sexo) {
                return response()->json([
                    'message' => 'Record not found',
                    'data' => []
                ], 404);
            }

            $sexo->nome = $request->name;
            $sexo->save();

            return response()->json([
                'message' => 'success',
                'data' => $sexo,
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'Error when updating',
                'error' => $e->getMessage(),
                'data' => []
            ], 500);
        }
    }

    public function destroy(int $id)
    {
        try {
            $sexo = Sexo::find($id);

            if (!$sexo) {
                return response()->json([
                    'message' => 'Record not found',
                    'data' => []
                ], 404);
            }

            $sexo->delete();

            return response()->json([
                'message' => 'success',
                'data' => $sexo,
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'Error when deleting',
                'error' => $e->getMessage(),
                'data' => []
            ], 500);
        }
    }

}
