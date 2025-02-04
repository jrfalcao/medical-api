<?php

namespace App\Http\Controllers;

use App\Http\Requests\ConsultaRequest;
use App\Services\ConsultaService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ConsultaController extends Controller
{
    protected $consultaService;

    public function __construct(ConsultaService $consultaService)
    {
        $this->consultaService = $consultaService;
    }

    public function listar(Request $request)
    {
        $data = $request->query('data');
        $medico_id = $request->query('medico_id');
        $consultas = $this->consultaService->listar($data, $medico_id);
        return response()->json($consultas);
    }

    public function store(ConsultaRequest $request): JsonResponse
    {
        $consulta = $this->consultaService->createConsulta($request->validated());
        return response()->json($consulta, Response::HTTP_CREATED);
    }
}
