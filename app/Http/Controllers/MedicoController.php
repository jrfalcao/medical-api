<?php

namespace App\Http\Controllers;

use App\Http\Requests\ListarPacientesRequest;
use App\Http\Requests\MedicoRequest;
use App\Services\ConsultaService;
use App\Services\MedicoService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

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

    public function store(MedicoRequest $request): JsonResponse
    {
        $medico = $this->medicoService->createMedico($request->validated());
        return response()->json($medico, Response::HTTP_CREATED);
    }

    public function listarPacientes($id_medico, ListarPacientesRequest $request, ConsultaService $consultaService): JsonResponse
    {
        $apenasAgendadas = filter_var(request('apenas-agendadas'), FILTER_VALIDATE_BOOLEAN);
        $nome = $request->query('nome');

        $filtros = [
            'apenas-agendadas' =>$apenasAgendadas, 'nome' => $nome
        ];

        $pacientes = $consultaService->listarPacientesDoMedico($id_medico, $filtros);

        return response()->json($pacientes);
    }
}
