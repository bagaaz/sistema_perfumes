<?php

namespace App\Http\Repositories;

use App\Models\Perfume\Perfume;

class PerfumeRespository
{
    private $model;

    public function __construct()
    {
        $this->model = new Perfume();
    }

    public function getPerfumes(): array
    {
        $perfumes = $this->model->with('fabricante', 'grife', 'duracao', 'faixa_etaria', 'projecao', 'sexo')->get()->toArray();

        return $perfumes;
    }

    public function getPerfumeComFiltros($nome = null, $parametros): array
    {
        $perfumes = $this->model->where('nome', 'like', '%'.$nome.'%');

        if ($parametros->has('grife')) {
            $perfumes = $perfumes->with('grife')->whereHas('grife', function ($query) use ($parametros) {
                $query->where('nome', 'like', '%'.$parametros->input('grife').'%');
            });
        }

        if ($parametros->has('fabricante')) {
            $perfumes = $perfumes->with('fabricante')->whereHas('fabricante', function ($query) use ($parametros) {
                $query->where('nome', 'like', '%'.$parametros->input('fabricante').'%');
            });
        }

        if ($parametros->has('categoria')) {
            $perfumes = $perfumes->with('categoria')->whereHas('categoria', function ($query) use ($parametros) {
                $query->where('nome', 'like', '%'.$parametros->input('categoria').'%');
            });
        }

        if ($parametros->has('indicacao')) {
            $perfumes = $perfumes->with('indicacao')->whereHas('indicacao', function ($query) use ($parametros) {
                $query->where('nome', 'like', '%'.$parametros->input('indicacao').'%');
            });
        }

        if ($parametros->has('sexo')) {
            $perfumes = $perfumes->with('sexo')->whereHas('sexo', function ($query) use ($parametros) {
                $query->where('nome', 'like', '%'.$parametros->input('sexo').'%');
            });
        }

        if ($parametros->has('notas')) {
            $perfumes = $perfumes->with('notas')->whereHas('notas', function ($query) use ($parametros) {
                $query->where('nome', 'like', '%'.$parametros->input('notas').'%');
            });
        }

        if ($parametros->has('familiaOlfativa')) {
            $perfumes = $perfumes->with('familiaOlfativa')->whereHas('familiaOlfativa', function ($query) use ($parametros) {
                $query->where('nome', 'like', '%'.$parametros->input('familiaOlfativa').'%');
            });
        }
        $perfumes = $perfumes->get()->toArray();

        return $perfumes;
    }
}
