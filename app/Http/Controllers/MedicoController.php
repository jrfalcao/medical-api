<?php

namespace App\Http\Controllers;

use App\Services\MedicoService;
use Illuminate\Http\Request;

class MedicoController extends Controller
{
    protected $medicoService;

    public function __construct(MedicoService $medicoService)
    {
        $this->medicoService = $medicoService;
    }

    /**
     * Exibir todas os médicos.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index(Request $request)
    {
        $nome = $request->query('nome');
        $medicos = $this->medicoService->listarMedicos($nome);
        return response()->json($medicos);
    }
}
