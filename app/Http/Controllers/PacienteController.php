<?php

namespace App\Http\Controllers;

use App\Http\Requests\AdicionarPacienteRequest;
use App\Http\Requests\AtualizarPacienteRequest;
use App\Services\PacienteService;
use Illuminate\Http\JsonResponse;

class PacienteController extends Controller
{
    protected $pacienteService;

    public function __construct(PacienteService $pacienteService)
    {
        $this->pacienteService = $pacienteService;
    }

    public function atualizar($id_paciente, AtualizarPacienteRequest $request)
    {
        $paciente = $this->pacienteService->atualizarPaciente((int) $id_paciente, $request->only(['nome', 'celular']));

        if (!$paciente) {
            return response()->json(['message' => 'Paciente não encontrado'], 404);
        }

        return response()->json($paciente);
    }

    public function adicionar(AdicionarPacienteRequest $request): JsonResponse
    {
        $paciente = $this->pacienteService->adicionarPaciente($request->validated());
        return response()->json($paciente, 201);
    }
}
