<?php

namespace App\Http\Controllers;

use App\Services\CidadeService;
use Illuminate\Http\Request;

class CidadeController extends Controller
{
    protected $cidadeService;

    public function __construct(CidadeService $cidadeService)
    {
        $this->cidadeService = $cidadeService;
    }

    /**
     * Exibir todas as cidades.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        $cidades = $this->cidadeService->listarCidades();
        return response()->json($cidades);
    }
}
