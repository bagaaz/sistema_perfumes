<?php

namespace App\Http\Controllers\Perfumes;

use App\Http\Controllers\Controller;
use App\Models\Perfume\Perfume;
use Illuminate\Http\Request;

class PerfumesController extends Controller
{
    public function index()
    {
        $perfumes = 'Aqui vai a lista de perfumes';

        return response()->json([
            'success' => true,
            'data' => $perfumes
        ]);
    }

    public function search(Request $request, $nome)
    {
        $perfumes = Perfume::where('nome', 'like', '%'.$nome.'%');

        //Aplicação de filtros caso o tenham sido enviados
        if ($request->has('grife')) {
            $perfumes = $perfumes->with('grife')->whereHas('grife', function ($query) use ($request) {
                $query->where('nome', 'like', '%'.$request->input('grife').'%');
            });
        }

        if ($request->has('fabricante')) {
            $perfumes = $perfumes->with('fabricante')->whereHas('fabricante', function ($query) use ($request) {
                $query->where('nome', 'like', '%'.$request->input('fabricante').'%');
            });
        }

        if ($request->has('categoria')) {
            $perfumes = $perfumes->with('categoria')->whereHas('categoria', function ($query) use ($request) {
                $query->where('nome', 'like', '%'.$request->input('categoria').'%');
            });
        }

        if ($request->has('indicacao')) {
            $perfumes = $perfumes->with('indicacao')->whereHas('indicacao', function ($query) use ($request) {
                $query->where('nome', 'like', '%'.$request->input('indicacao').'%');
            });
        }

        if ($request->has('sexo')) {
            $perfumes = $perfumes->with('sexo')->whereHas('sexo', function ($query) use ($request) {
                $query->where('nome', 'like', '%'.$request->input('sexo').'%');
            });
        }

        if ($request->has('notas')) {
            $perfumes = $perfumes->with('notas')->whereHas('notas', function ($query) use ($request) {
                $query->where('nome', 'like', '%'.$request->input('notas').'%');
            });
        }

        if ($request->has('familiaOlfativa')) {
            $perfumes = $perfumes->with('familiaOlfativa')->whereHas('familiaOlfativa', function ($query) use ($request) {
                $query->where('nome', 'like', '%'.$request->input('familiaOlfativa').'%');
            });
        }
        $perfumes = $perfumes->get();

        return response()->json([
            'success' => true,
            'data' => $perfumes
        ]);
    }
}
