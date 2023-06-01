<?php

namespace App\Http\Controllers\Perfumes;

use App\Http\Controllers\Controller;
use App\Http\Repositories\PerfumeRespository;
use App\Models\Perfume\Perfume;
use Illuminate\Http\Request;

class PerfumesController extends Controller
{
    private $repository;

    public function __construct()
    {
        $this->repository = new PerfumeRespository();
    }

    public function index()
    {
        $perfumes = $this->repository->getPerfumes();

        return response()->json([
            'success' => true,
            'data' => $perfumes
        ], 200);
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

    public function search(Request $request, $nome)
    {
        $perfumes = $this->repository->getPerfumeComFiltros($nome, $request);

        return response()->json([
            'success' => true,
            'data' => $perfumes
        ]);
    }
}
