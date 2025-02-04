<?php

namespace App\Http\Controllers;

use App\Services\MedicoService;
use Illuminate\Http\Request;

class MedicoController extends Controller
{
    protected $medicoService;

    public function __construct(MedicoService $cidadeService)
    {
        $this->medicoService = $medicoService;
    }

    /**
     * Exibir todas as cidades.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        $medico = $this->medicoService->listarMedicos();
        return response()->json($medico);
    }
}
