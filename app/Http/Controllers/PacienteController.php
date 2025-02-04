<?php

namespace App\Http\Controllers;

use App\Http\Requests\AtualizarPacienteRequest;
use App\Services\PacienteService;

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
}
